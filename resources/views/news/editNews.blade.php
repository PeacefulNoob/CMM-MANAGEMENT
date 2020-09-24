@extends('layouts.app')
@section('content')
<div class="container">

<form action="/news/{{$new->id}}"  method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf 
  <div class="form-group">
    <label for="title">News</label>
    <input type="text" class="form-control"  name="title"  value="{{$new->title}}">
  </div>
  <div class="form-group">
    <label for="description1">Description</label>
    <textarea class="ckeditor form-control" name="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
