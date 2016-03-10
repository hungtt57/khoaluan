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
       return view('frontend.pages.home',compact('allCategories'));
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
        Cart::add(array('id'=> $id,'name'=> $product_buy->alias,'qty'=>$qty,'price'=> $product_buy->gia, 'options' => array('image' => $product_buy->anhdaidien)));
        $content=Cart::content();
        return redirect()->back();
    }
     public function giohang(){
        $content = Cart::content();
        $total = Cart::total();
        return view('frontend.pages.cart',compact('content','total'));
    }
    public function timkiem(Request $request){
        $key=$request->input('search');
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
    public function capnhatgiohang(){
        if (Request::ajax()) {
            $id = Request::get('id');
            $qty = Request::get('qty');
            Cart::update($id,array('qty'=>$qty));
           return "123";
        }
    }
    public function blog(){
        $allBlogs=DB::table('blog')->paginate(10);
       return view('frontend.pages.blog',compact('allBlogs'));
    }
    public function blog_detail($id){
        $blog_detail = DB::table('blog')->where('id',$id)->first();
        return view('frontend.pages.blog_detail',compact('blog_detail'));
    }
}