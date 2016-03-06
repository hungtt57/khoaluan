<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $products= Product::all();
       return view('admin.pages.product.list',['products'=>$products]);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
             $allCategories= Category::all();
        return view('admin.pages.product.create',['category'=>$allCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $product= new Product;
        $product->ten = $request->input('ten');
         $product->masp = $request->input('masp');
          $product->congdung = $request->input('congdung');
           $product->cachdung = $request->input('cachdung');
           $product->donggoi = $request->input('donggoi');
           $product->category_id = $request->input('category_id');



        $category->save();
        return view('admin.pages.product.list')->with(['flash_message'=>'Tạo thành công']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product= Product::find($id);
        return view('admin.pages.product.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.pages.category.edit_category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $category = DB::table('categories')->where('id','=', $id)->first();
        $category->name_category = $request->input('name_category');
        DB::table('categories')
            ->where('id','=', $id)
            ->update(['name_category' => $category->name_category]);
        return redirect('admin/category/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         Category::find($id)->delete();
        return redirect('admin/category/list');
    }
}
