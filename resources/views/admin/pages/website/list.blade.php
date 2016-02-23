@extends('admin.layout.master')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="page-header">
		  	<h3 class="page-title">Danh sách Website</h3>
			
			@include('admin.includes.alert')

			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Category</th>
						<th>Url</th>
						<th>Tên khách hàng</th>
						<th>Địa chỉ khách hàng</th>
						<th>Số điện thoại</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
				@if (count($websites))
					@foreach($websites as $website) 
					<tr>
						<td>{{ $website->id }}</td>
						<td>{{ $website->category->name_category }}</td>
						<td>{{ $website->url }}</td>
						<td>{{ $website->name_customer }}</td>
						<td>{{ $website->address_customer }}</td>
						<td>{{ $website->phone }}</td>
						<td>
							<a href="{{ route('website_edit', ['id' => $website->id]) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
						</td>
						<td>
							<a onclick="return confirm ('Bạn có chắc muốn xóa không!!')" href="{{ route('website_destroy', ['id' => $website->id]) }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
						</td>
					</tr>
					@endforeach
				@else 
					<tr>
						<td colspan="100%">ko có website nào cả</td>
					</tr>
				@endif
				</tbody>
			</table>

		  	<a href="{{ route('website_create') }}" class="btn btn-primary">Thêm website</a>

		</div>
	</section>
</section>
@endsection