<?php
namespace App\Http\Controllers;
use App\Category;
use App\Http\Controllers\Controller;
use DB,Cart;
use App\Product;
use Request;
use App\Blog;
use App\Http\Requests\CheckThanhtoanRequest;
use App\Order;
use App\Order_detail;
use Mail;
use Illuminate\Pagination\Paginator;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategories= Category::all();
        $new_products = DB::table('products')->select('id','ten','anhdaidien','gia','alias')->orderBy('id','DESC')->paginate(8);
        $blogs = DB::table('blog')->select('id','title','description','image','alias')->orderBy('id','ASC')->limit(2)->get();
       return view('frontend.pages.home',compact('allCategories','new_products','blogs'));
    }
    public function loaisanpham($id)
    {
        $product_cates = DB::table('products')->select('id','ten','alias','gia','anhdaidien','category_id')->where('category_id',$id)->paginate(10);
        $name_cate = DB::table('categories')->select('ten')->where('id',$id)->first();
        return view('frontend.pages.category',compact('product_cates','name_cate'));
    }
    public function chitietsanpham($id){
        $product_detail  = DB::table('products')->where('id',$id)->first();
       $category = DB::table('categories')->where('id',  $product_detail->category_id)->first();
        return view('frontend.pages.product',compact('product_detail','category'));
    }
    public function muahang($id){

        $qty = Request::get("qty");
        $product_buy = DB::table('products')->where('id',$id)->first();
        Cart::add(array('id'=> $id,'name'=> $product_buy->ten,'qty'=>$qty,'price'=> format_gia($product_buy->gia), 'options' => array('image' => $product_buy->anhdaidien)));
        $content=Cart::content();
        return redirect()->back()->with('flash_message','1');
    }
     public function giohang(){
        $content = Cart::content();
        $total = Cart::total();
        return view('frontend.pages.cart',compact('content','total'));
    }
    public function timkiem(Request $request){
        $key=Request::get('search');
         if($key=="" || $key==" "){
            return redirect()->back();
         }
      
        $products=Product::where('ten','like','%'.$key.'%')->paginate(5,['*'],'product');

        $products->setPageName('product');
    
        $blogs = Blog::where('title','like','%'.$key.'%')->paginate(5,['*'],'blog');
         $blogs->setPageName('blog');

       return view('frontend.pages.search',compact('products','blogs','key'));
    }
    
     public function xoasanpham($id){
        Cart::remove($id);
        return redirect('/giohang');
    }
   
    public function blog(){
        $allBlogs=DB::table('blog')->paginate(10);
        $recent_blogs = DB::table('blog')->orderBy('id','DESC')->limit(2)->get();
       return view('frontend.pages.blog',compact('allBlogs','recent_blogs'));
    }
    public function blog_detail($id){
        $blog_detail = DB::table('blog')->where('id',$id)->first();
        $recent_blogs = DB::table('blog')->orderBy('id','DESC')->limit('2')->get(); 
        return view('frontend.pages.blog_detail',compact('blog_detail','recent_blogs'));
    }

    public function about(){
      $allCategories= Category::all();
      $blogs = DB::table('blog')->select('id','title','description','image','alias')->orderBy('id','ASC')->limit(2)->get();
       return view('frontend.pages.about',compact('allCategories','blogs'));
    }

    public function contact(){
      $allCategories= Category::all();
      $blogs = DB::table('blog')->select('id','title','description','image','alias')->orderBy('id','ASC')->limit(2)->get();
       return view('frontend.pages.contact',compact('allCategories','blogs'));
    }
    public function xoaspcart(){
        if(Request::ajax()){
             $id=Request::get('rowid');
              Cart::remove($id);
              echo Cart::total();
        }
    }

    public function capnhatcart(){
         if(Request::ajax()){
             $rowid=Request::get('rowid');
            
            $qty = Request::get('qty');
            Cart::update($rowid,array('qty'=>$qty));

            echo Cart::total();
        }
    }



    public function thanhtoan(CheckThanhtoanRequest $request){
        
        $content=Cart::content();
            
        $tenkh=$request->input('tenkh');
        $emailkh=$request->input('emailkh');
        $sdtkh=$request->input('sdtkh');
        $ngaynhankh=$request->input('ngaynhankh');
        $diachikh=$request->input('diachikh');
        $ghichukh=$request->input('ghichukh');
        
        $order= new Order;
        $order->sdtkh=$sdtkh;
        $order->emailkh=$emailkh;
        $order->tenkh=$tenkh;
        $order->ghichukh=$ghichukh;
        $order->ngaydatkh=date('Y-m-d');
        $order->ngaynhankh=$ngaynhankh;
        $order->diachikh=$diachikh;
        $order->tongtien=Cart::total();
        $order->trangthai=0;
        $order->save();
        
        foreach ($content as $key => $item) {
              
                $orderdetail=new Order_detail;
                $orderdetail->order_id=$order->id;
                $orderdetail->tensp=$item['name'];
                $orderdetail->giasp=$item['price'];

                $orderdetail->soluong=$item['qty'];
               
                $orderdetail->anh=$item['options']['image'];
    
                $orderdetail->tongtien=$item['subtotal'];
                
                $orderdetail->save();
        }
    
        
        $info=Order::find($order->id)->order_detail->toArray();
        $order=$order->toArray();
       
          $data = array(
                  'order' => $order,
                  'orderdetail'=>$info
                  );
        
          Mail::queue('admin.email.order', $data, function ($message) use ($data){

          $message->from('hin1471994@gmail.com', 'Thông tin đơn hàng');

           $message->to($data['order']['emailkh'])->subject('Xác nhận đặt hàng!!');

           });

          Cart::destroy();
         return redirect('/')->with('message','Checkout successed!!Please check mail to know more info order!!');
    }








}