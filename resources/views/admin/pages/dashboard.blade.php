@extends('admin.layout.master')
@section('css')
 <link rel="stylesheet" href="{{asset('public/admin/assets/morris.js-0.4.3/morris.css')}}" type="text/css">
@endsection

 
@section('content')
    <section id="main-content">
          <section class="wrapper">
          <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="icon-file-text"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">{{$count_blog}}</h1>
                              <p>Tin tức</p>
                          </div>
                      </section> 
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="icon-th-large"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">{{$count_category}}</h1>
                              <p>Danh Mục</p>
                          </div>
                      </section>
                  </div>
                  
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="icon-bar-chart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">{{$count_product}}</h1>
                              <p>Sản phẩm</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="icon-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">{{$count_order}}</h1>
                              <p>Đơn Hàng</p>
                          </div>
                      </section>
                  </div>
              </div>






              <div class="row">
                 <div class="col-xs-6">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Đơn hàng mới nhất</h1>
                              
                              </div>
                             
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                            @foreach($orders as $key =>$value)

                              <tr>
                                  <td>{{$key+1}}</td>
                                  <td>
                                       <a href="{{ asset('admin/order/'.$value->id.'/show') }}">{{$value->tenkh}} </a>
                                  </td>
                                  <td><a href="{{ asset('admin/order/'.$value->id.'/show') }}">{{$value->sdtkh}}</a></td>
                                  <td>    <a href="{{ asset('admin/order/'.$value->id.'/show') }}">{{$value->ngaynhankh}}</a></td>
                                  <td>    <a href="{{ asset('admin/order/'.$value->id.'/show') }}">{{number_format($value->tongtien,0,",",".")}} đ</a></td>
                                  <td>
                                   
                                  @if($value->trangthai==1)
                                   <a href="{{ asset('admin/order/'.$value->id.'/show') }}"> <span style="cursor: pointer;" class="badge bg-info">Đang ship</span> </a>
                                 @endif
                                @if($value->trangthai==0)
                                  <a href="{{ asset('admin/order/'.$value->id.'/show') }}">  <span  style="cursor: pointer;" class="badge bg-important">Chưa Ship</span></a>
                                 @endif
                                @if($value->trangthai==2)
                                 <a href="{{ asset('admin/order/'.$value->id.'/show') }}">     <span style="cursor: pointer;" class="badge bg-success">Đã Ship</span></a>
                                @endif




                                  </td>
                                 
                              </tr>
                      
                             @endforeach
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
                    <div class="col-xs-6">    
                          <section class="panel">
                              <header class="panel-heading">
                                  Lượng truy cập
                              </header>
                             
                              <div class="panel-body">
                                  


								<div id="hero-bar" style="height: 250px;"></div>
                              </div>
                          </section>
                      </div>
                     
              </div>
              </div> <!-- end row state over-->     

               </section>
    </section>

@endsection
@section('js')

  <script src="{{asset('public/admin/assets/morris.js-0.4.3/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/morris.js-0.4.3/morris.min.js')}}"></script>
 
    <script src="{{asset('public/admin/js/thongke.js')}}" type="text/javascript"></script>
    
@endsection