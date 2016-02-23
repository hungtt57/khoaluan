@extends('admin.layout.master')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="page-header">
		  	<h3 class="page-title">Thêm Website</h3>
			
			@include('admin.includes.errors')

		  	<form action="{{ route('website_store') }}" method="POST" class="form-horizontal" role="form">
  				{{ csrf_field() }}
					<div class="form-group">
						<label for="inputCategory_id" class="col-sm-2 control-label">Category:</label>
						<div class="col-sm-10">
							<select name="category_id" id="inputCategory_id" class="form-control">
								<option value="">-- Select One --</option>
								@foreach ($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name_category }}</option>
								@endforeach
							</select>
						</div>
					</div>

		  			<div class="form-group">
		  				<label for="inputUrl" class="col-sm-2 control-label">Url:</label>
		  				<div class="col-sm-10">
		  					<input type="url" name="url" id="inputUrl" class="form-control" value="" required="required" title="">
		  				</div>
		  			</div>

		  			<div class="form-group">
		  				<label for="inputName_customer" class="col-sm-2 control-label">Tên khách hàng:</label>
		  				<div class="col-sm-10">
		  					<input type="text" name="name_customer" id="inputName_customer" class="form-control" value="" required="required" title="">
		  				</div>
		  			</div>
		  		
		  			<div class="form-group">
		  				<label for="textareaAddress_customer" class="col-sm-2 control-label">Địa chỉ khách hàng:</label>
		  				<div class="col-sm-10">
		  					<textarea name="address_customer" id="textareaAddress_customer" class="form-control" rows="3" required="required"></textarea>
		  				</div>
		  			</div>

		  			<div class="form-group">
		  				<label for="inputPhone" class="col-sm-2 control-label">Số điện thoại:</label>
		  				<div class="col-sm-10">
		  					<input type="text" name="phone" id="inputPhone" class="form-control" value="" required="required" title="">
		  				</div>
		  			</div>

		  			<div class="form-group">
		  				<div class="col-sm-10 col-sm-offset-2">
		  					<button type="submit" class="btn btn-success">Thêm website</button> 
		  					<a href="{{ route('website_list') }}" class="btn btn-default">Danh sách website</a>
		  				</div>
		  			</div>
		  	</form>

		</div>
	</section>
</section>
@endsection