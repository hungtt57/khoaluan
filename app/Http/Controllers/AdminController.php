<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use App\Blog;
use App\Order;
use App\Thongke;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Request;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_product=Product::count();
        $count_category=Category::count();
        $count_blog=Blog::count();
         $count_order=Order::count();


         $orders=DB::table('order')->select('id','tenkh','sdtkh','tongtien','ngaynhankh','trangthai')->limit(5)->get();
       //   $thongke=Thongke::all();
       //   $data = "[" ."\n";
       //   $prefix = '';
       // foreach ($thongke as $key => $value) {

       // $data .= $prefix;
       //  $data .= "{";
       //  $data .= "date: "."'".date('d-m-Y',$value->date_)."'";
       //  $data .= ","." hit: ". $value->visits_;
       //  $data .=  ' }';  
       //   $prefix = ",\n";
       //   }

       // $data .="\n ]";
       //  $data = json_encode($data);
         $thongke = Thongke::all()->toJSON();

       return view('admin.pages.dashboard',['count_product'=>$count_product,'count_category' => $count_category,'count_blog' => $count_blog,'count_order' => $count_order, 'orders' =>$orders,'thongke'=>$thongke]);
    }
    
    function visit_user(){
        if(Request::ajax()){
          $date = strtotime(date('Y-m-d', strtotime('-7 days')));
             $thongke=Thongke::select('date_','visits_')->where('date_','>', $date)->limit(7)->get();
             $thongke = $thongke->toArray();
          for($i = 0; $i < sizeof($thongke);$i++){
            $thongke[$i]['date_']= date('d-m-Y',$thongke[$i]['date_']);
          }
            header('Content-Type: application/json');
            echo json_encode($thongke);
        }
    }
}
