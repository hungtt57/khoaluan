<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Order;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.pages.order.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.user.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CheckUserRequest $request)
    {
        $user= new User();
        $user->name = $request -> input('fullname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->user_name = $request->input('user_name');
        $user->save();
        return redirect('/admin/user/list')->with(['flash_message'=>'Tạo thành công']);
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
        $user=User::find($id);
        return view('admin.pages.user.edit_user',compact('user'));
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
        $user = DB::table('users')->where('id','=', $id)->first();
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        DB::table('users')
            ->where('id','=', $id)
            ->update(['user_name' => $user->user_name, 'email' => $user->email]);

        return redirect('admin/user/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
   return redirect('admin/user/list');
    }
}
