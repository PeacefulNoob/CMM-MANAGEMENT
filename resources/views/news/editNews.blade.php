@extends('layouts.app')
@section('content')
<div class="container-fluid adminPage">
<div class="editblogH">
    <img src="/{{$new->image}}" alt="">
</div>
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
  <div class="form-group">
            <label for="image">Upload photo</label>
            <input type="file" id="image" name="image">
            <div class="validate"></div>
        </div>
  <div class="form-group">
      <label for="new_categories_id">News Category</label>
      <select name="new_categories_id" id="new_categories_id">
      <option value="{{$new->new_categories_id}}">{{$new->categories->title}}</option>
      @foreach($categories as $cat)
       <option value="{{$cat->id}}">{{$cat->title}}</option>
       @endforeach
</select>   
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
