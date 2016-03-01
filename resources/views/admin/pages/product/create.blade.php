@extends('admin.layout.master')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3 class="page-title">Đăng sản phẩm</h3>
		<form class="form-horizontal" method="post" action="{{asset('/admin/product/create')}}">
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
				<label class="col-md-2 control-label" for="name_category">Tên sản phẩm</label>
					<div class="col-md-4">
						<input class="form-control" tabindex="1" placeholder="" type="text" name="ten" id="ten">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Mã sản phẩm</label>
					<div class="col-md-4">
						<input class="form-control" tabindex="1" placeholder="" type="text" name="masp" id="masp">
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Giá</label>
					<div class="col-md-4">
						<input class="form-control" tabindex="1" placeholder="" type="text" name="masp" id="masp">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Công dụng</label>
					<div class="col-md-4">
						<textarea class="form-control" tabindex="1" placeholder="" type="text" name="congdung" id="congdung"></textarea>
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Cách dùng</label>
					<div class="col-md-4">
						<textarea class="form-control" tabindex="1" placeholder="" type="text" name="cachdung" id="cachdung">
						</textarea>
					</div>
				</div>


				<div class="form-group">
					<input type="submit" value="Create Category" class="btn btn-success" />
					<a type="button"  class="btn btn-info" href="{{asset('admin/category/list')}}">Back</a>
				</div>
			</div>
		</form>
	</section>
</section>
@endsection