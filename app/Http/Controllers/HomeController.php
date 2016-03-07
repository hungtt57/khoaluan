<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

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
        $product_cate = DB::table('products')->select('id','ten','gia','anhdaidien','category_id')->where('category_id',$id)->get();
        $name_cate = DB::table('categories')->select('ten')->where('id',$id)->first();
        return view('frontend.pages.category',compact('product_cate','name_cate'));
    }
    public function chitietsanpham($id){
        $product_detail  = DB::table('products')->where('id',$id)->first();
        $product_cate = DB::table('products')->where('category_id',$product_detail->category_id)->where('id','<>',$id)->take(6)->get();
        return view('frontend.pages.product',compact('product_detail','product_cate'));
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
