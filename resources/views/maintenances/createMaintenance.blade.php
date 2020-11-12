@extends('layouts.app')
@section('content')
<div class="container-fluid">
<form action="{{ route('maintenances.store')}}"  method="POST" enctype="multipart/form-data"    class="form-horizontal mb-0">
    @csrf
    <div class="form-group">
      <label for="title">Create Maintenance packet</label>
      <input type="text" class="form-control"  name="title"  placeholder="Enter maintenances packet title">
      <small id="text" class="form-text text-muted">Enter maintenances packet title</small>
    </div>
    <div class="form-group">
      <label for="description1">Description</label>
      <textarea class="ckeditor form-control" name="description"></textarea>

    </div>
    <div class="form-group input-group control-group increment col-sm-10" style="padding: 15px;" >
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left: 0px;">Add photos</label>
      <input type="file" name="photos[]" class="form-control" multiple>
   
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
