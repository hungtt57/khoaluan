<?php
namespace App\Http\Controllers;
use App\Category;
use App\Http\Controllers\Controller;
use DB,Cart;
use App\Product;
use Request;
use App\Blog;
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
        $blogs = DB::table('blog')->select('id','title','description','image','alias')->orderBy('id','ASC')->paginate(2);
       return view('frontend.pages.home',compact('allCategories','new_products','blogs'));
    }
    public function loaisanpham($id)
    {
        $product_cate = DB::table('products')->select('id','ten','alias','gia','anhdaidien','category_id')->where('category_id',$id)->get();
        $name_cate = DB::table('categories')->select('ten')->where('id',$id)->first();
        return view('frontend.pages.category',compact('product_cate','name_cate'));
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
        return redirect()->back();
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
       
        $products=Product::where('ten','like','%'.$key.'%')->paginate(5);
     
        $blogs = Blog::where('title','like','%'.$key.'%')->paginate(5);
        
       return view('frontend.pages.search',compact('products','blogs','key'));
    }
    
     public function xoasanpham($id){
        Cart::remove($id);
        return redirect('/giohang');
    }
   
    public function blog(){
        $allBlogs=DB::table('blog')->paginate(10);
        $recent_blogs = DB::table('blog')->orderBy('id','DESC')->paginate(2); 
       return view('frontend.pages.blog',compact('allBlogs','recent_blogs'));
    }
    public function blog_detail($id){
        $blog_detail = DB::table('blog')->where('id',$id)->first();
        return view('frontend.pages.blog_detail',compact('blog_detail'));
    }

    public function xoaspcart(){
        if(Request::ajax()){
             $id=Request::get('rowid');
              Cart::remove($id);
              echo 'oke';
        }
    }

    public function capnhatcart(){
         if(Request::ajax()){
             $rowid=Request::get('rowid');
            
            $qty = Request::get('qty');
            Cart::update($rowid,array('qty'=>$qty));

              echo 'oke';
        }
    }












}