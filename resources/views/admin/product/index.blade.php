@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')

<table class="table" id="myTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Category_id</th>
			<th>imgPath</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{ $loop->iteration}}</td>	
			<td>{{ $product->name }}</td>
			<td>{!! $product->description !!}</td>
			<td>{{ $product->price }} грн.</td>
			<td>{{ $product->category->name or ''}}</td>
			<td><img src="{{ $product->imgPath }}" title="{{ $product->name }}" alt=""  class="img-responsive"></td>
			<td><a href="{{ url('/admin/product/'.$product->id.'/edit') }}"><i class="far fa-edit"  title="Редактирование файла"></i></a></td>
			<td><a href="#" data-id="{{ $product->id }}" class="delete"><i class="fas fa-trash-alt" title="Удаление файла"></i></a></td>
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
     		   url:'/admin/product/'+ id,
     		   type: 'DELETE',
     		   success: function(){
     		   	 elem.parents('tr').remove()
     		   }

        	});
     	}) 
     	
}); // end jQuery
</script>


@stop