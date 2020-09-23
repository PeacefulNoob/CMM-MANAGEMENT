@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('news.store')}}"  method="POST" enctype="multipart/form-data"    class="form-horizontal mb-0">
    @csrf
    <div class="form-group">
      <label for="title">News</label>
      <input type="text" class="form-control"  name="title"  placeholder="Enter post title">
      <small id="text" class="form-text text-muted">Enter new post title</small>
    </div>
    <div class="form-group">
      <label for="description1">Description</label>
      <input type="text" class="form-control" id="description1" name="description" placeholder="Enter post description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
