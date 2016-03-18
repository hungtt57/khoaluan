@extends('admin.layout.master')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3 class="page-title">Sửa </h3>
		<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="col-md-12">

				@if ($errors->any())
				<div class="alert alert-danger"> 
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>	
				@endif

				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Tên khách hàng</label>
					<div class="col-md-6">
						<input class="form-control" tabindex="1" value='{{$order->tenkh}}' type="text" name="tenkh" id="tenkh">
					</div>
				</div>
				

				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Email</label>
					<div class="col-md-6">
						<input class="form-control" tabindex="1" value='{{$order->emailkh}}' type="text" name="emailkh" id="emailkh">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Số điện thoại</label>
					<div class="col-md-6">
						<input class="form-control" type="number" value='{{$order->sdtkh}}' name="sdtkh" id="sdtkh">
					</div>
				</div>
		
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Địa Chỉ</label>
					<div class="col-md-6">
						<input class="form-control" value='{{$order->diachikh}}' name="diachikh" id="diachikh">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Ghi Chú</label>
					<div class="col-md-6">
						<input class="form-control" value='{{$order->ghichukh}}' name="ghichukh" id="ghichukh">
					</div>
				</div>
					<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Ngày Ship</label>
					<div class="col-md-6">
						  <input type="date" class="form-control" min="{{date('Y-m-d')}}" name="ngaynhankh" id="ngaynhankh" value="{{$order->ngaynhankh}}" > 
					</div>
				</div>


				<div class="form-group">
					<input type="submit" value="Sửa sản phẩm" class="btn btn-success" />
					<a type="button"  class="btn btn-info" href="{{asset('admin/order/')}}">Back</a>
				</div>
			</div>
		</form>
	</section>
</section>
@endsection