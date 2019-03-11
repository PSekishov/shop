@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
	<h1>Edit Product</h1>
@stop

@section('content')
	{!! Form::model($product,['url'=>'/admin/product/'.$product->id,'method'=>'PUT']) !!}
		@include('admin.product.form')
	{!! Form::close() !!}
@stop

<br>

@section('js')

<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>


<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  }; 

  CKEDITOR.replace( 'description',options );
</script>

<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script type="text/javascript">
	$('#lfm').filemanager('image');
</script>

@stop
