@extends('layouts.error')

<div class="form-group">
	{!! Form::label('name','Product name') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description','Product Description') !!}
	{!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('price','Product Price') !!}
	{!! Form::text('price',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('category_id','Product Category_id') !!}
	{!! Form::text('category_id',null,['class'=>'form-control']) !!}
</div>

<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$product->imgPath or ''}}">
 </div>
 <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$product->imgPath or ''}}">

<br>

 {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
