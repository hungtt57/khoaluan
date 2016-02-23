@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
          	<h3 class="page-title"><a href="{{asset('/admin/category/create')}}">Create Category</a></h3>
               <div class="col-lg-12">
		              @if (Session::has('flash_message'))
		                <div class="alert alert-success">
		                    {!! Session::get('flash_message') !!}
		                </div> 
		              @endif         
		        </div>
		        <?php $count = 0;?>
		    	<table class="display" cellspacing="0" width="100%" border="1 solid gray">
		    	<thead>
			        <th><center>Id</center></th>
			    	<th><center>Name</center></th>
			        <th><center>Edit</center></th>
			        <th><center>Delete</center></th>
		    	</thead>
		 		<tbody>
		 			@foreach($allCategories as $category)
				    	<tr align="center">
				        <td><?php $count++; echo $count; ?></td>
				         <td  align="center">{{ $category['name_category'] }} </td> 
				        <td>
				            <a href="{{ asset('admin/category/'.$category['id'].'/edit')}}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
				        </td>
				        <td>
				            <a onclick="return xacnhanxoa ('Bạn có chắc muốn xóa không!!')" href="{{ asset('admin/category/'.$category['id'].'/delete')}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				        </td>
				        </tr>
					@endforeach
		 		</tbody>
		        </table>
    	</section>
    </section>
@endsection
@section('js')
<script type="text/javascript">
            $("div.alert").delay(3000).slideUp();
            function xacnhanxoa (msg)
                {
                    if (window.confirm(msg)){
                        return true;
                    }
                    return false;
                } 
</script>
@endsection