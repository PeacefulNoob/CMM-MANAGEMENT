@extends('layouts.app')
@section('content')
<div class="container">

<form action="/designs/{{$design->id}}"  method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf 
  <div class="form-group">
    <label for="title">Design</label>
    <input type="text" class="form-control"  name="title"  value="{{$design->title}}">
  </div>
  <div class="form-group">
    <label for="description1">Description</label>
    <input type="text" class="form-control" id="description1" name="description" value="{{$design->description}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
