<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Website;
use App\Category;

use App\Http\Requests\CheckWebsiteCreateRequest ;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websites = Website::all();
        return view('admin.pages.website.list', compact('websites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.website.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckWebsiteCreateRequest $request)
    {
        $new_website = new Website;

        $new_website->category_id = $request->get('category_id');
        $new_website->url = $request->get('url');
        $new_website->name_customer = $request->get('name_customer');
        $new_website->address_customer = $request->get('address_customer');
        $new_website->phone = $request->get('phone');

        $new_website->save();

        return redirect()
            ->route('website_list')
            ->withSuccess('Thêm thành công Website '. $new_website->id)
            ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.pages.website.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $website = Website::find($id);
        $categories = Category::all();
        return view('admin.pages.website.edit', compact('website', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CheckWebsiteCreateRequest $request, $id)
    {
        $edit_website = Website::find($id);

        $edit_website->category_id = $request->get('category_id');
        $edit_website->url = $request->get('url');
        $edit_website->name_customer = $request->get('name_customer');
        $edit_website->address_customer = $request->get('address_customer');
        $edit_website->phone = $request->get('phone');

        $edit_website->save();

        return redirect()
            ->route('website_list')
            ->withSuccess('Sửa thành công Website '. $edit_website->id)
            ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $current_website = Website::find($id);
        Website::destroy($id);

        return redirect()
            ->route('website_list')
            ->withSuccess('Xóa thành công Website '. $current_website->id)
            ;
    }
}
