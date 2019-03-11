@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
	
<table class="table" id="myTable">

	<thead style="background-color: #fdd;">
		<tr >
			<th>ID</th>
			<th>Image</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody style="background-color: #ddd;">

		@foreach($categories as $category)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td><img src="{{ $category->imgPath }}" alt="" class="img-responsive"></td>
			<td><a href="{{url('/admin/category/'.$category->id.'/edit')}}">{{ $category->name }}</a></td>
			<td><a href="#" data-id="{{$category->id}}" class="delete">Delete</a></td>
		</tr>
		@endforeach
	
	</tbody>

</table>

@stop


@section('js')
<script type="text/javascript">

	$(document).ready(function(){

    $('#myTable').DataTable();

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
     
     	$('#myTable').on('click','.delete',function(e){
          e.preventDefault();
          let id = $(this).attr('data-id');
          let elem = $(this);

          $.ajax({
     		   url:'/admin/category/'+ id,
     		   type: 'DELETE',
     		   success: function(){
     		   	 elem.parents('tr').remove()
     		   }

        	});
     	}) 
     	
}); // end jQuery
</script>
@stop