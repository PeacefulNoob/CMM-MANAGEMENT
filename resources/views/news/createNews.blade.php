@extends('layouts.app')
@section('content')
<div class="container-fluid">
<form action="{{ route('news.store')}}"  method="POST" enctype="multipart/form-data"    class="form-horizontal mb-0">
    @csrf
    <div class="form-group">
      <label for="title">News</label>
      <input type="text" class="form-control"  name="title"  placeholder="Enter post title">
      <small id="text" class="form-text text-muted">Enter new post title</small>
    </div>
    <div class="form-group">
      <label for="description1">Description</label>
      <textarea class="ckeditor form-control" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
