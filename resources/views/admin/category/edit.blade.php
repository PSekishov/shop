@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
    <h1>Edit Category {{$category->name}}</h1>
@stop

@section('content')
    {!! Form::model($category,['url'=>'/admin/category/'.$category->id,'method'=>'put']) !!}
		@include('admin.category.form')
	{!! Form::close() !!}
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}

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