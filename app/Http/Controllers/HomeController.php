<?php

namespace App\Http\Controllers;


use App\Category;
use App\Http\Controllers\Controller;
use DB,Cart;
use Request;
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
        return view('frontend.cart',compact('content','total'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
