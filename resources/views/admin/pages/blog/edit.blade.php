@extends('admin.layout.master')
@section('css')
<script src="{{asset('public/admin/ckeditor/ckeditor.js')}}"></script>
@endsection
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
				<label class="col-md-2 control-label" for="name_category">Tiêu đề</label>
					<div class="col-md-6">
						<input class="form-control" tabindex="1" value='{{$blog->title}}' type="text" name="title" id="title">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Mô tả ngắn</label>
					<div class="col-md-6">
						<input class="form-control" value='{{$blog->description}}' name="description" id="description">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Nội dung</label>
					<div class="col-md-6">
						<textarea class="form-control" tabindex="1"   type="text" name="content" id="content">
						{{$blog->content}}</textarea>
							<script> CKEDITOR.replace('content')</script>
					</div>
				</div>
				
					
				    	<div class="form-group">
						    	<label class="col-md-2 control-label" for="name_category">Chọn ảnh đại diện

						    	<img src="{{asset($blog->image)}}" width="75px" height="75px">


						    	</label>
						    <div class="col-md-6">
						    	   <input id="image" class="form-control"  name="image" type="file">
						    </div>
				    	</div>


				<div class="form-group">
					<input type="submit" value="Sửa" class="btn btn-success" />
					<a type="button"  class="btn btn-info" href="{{asset('admin/blog/')}}">Back</a>
				</div>
			</div>
		</form>
	</section>
</section>
@endsection