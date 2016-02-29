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
       $allCategories= Category::all();
       return view('admin.pages.category.list_category',['allCategories'=>$allCategories]);
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
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CheckCategoryRequest $request)
    {
        $category= new Category();
        $category->name_category = $request->input('name_category');
        $category->save();
        return redirect('/admin/category/list')->with(['flash_message'=>'Tạo thành công']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
