@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
              <h3 class="page-title">Create Category</h3>
				<form class="form-horizontal" method="post" action="{{asset('/admin/category/create')}}">
				 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="col-md-12">
					    <div class="form-group">
						    	<label class="col-md-2 control-label" for="name_category">Name of Category: </label>
						    <div class="col-md-4">
						    	<input class="form-control" tabindex="1" placeholder="Name..." type="text" name="name_category" id="name_category">
						    </div>
				    	</div>
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
				    		<input type="submit" value="Create Category" class="btn btn-success" />
				    		<a type="button"  class="btn btn-info" href="{{asset('admin/category/list')}}">Back</a>
				    	</div>
			   		</div>
			</form>
    	</section>
    </section>
@endsection