@extends('layouts.app')
@section('content')
<div class="container-fluid adminPage">

    <form action="/maintenances/{{ $maintenance->id }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Edit repair packet</label>
            <input type="text" class="form-control" name="title" value="{{ $maintenance->title }}">
        </div>
        <div class="form-group">
            <label for="description1">Description</label>
            <textarea class="ckeditor form-control" name="description">{{ $maintenance->description }}</textarea>
  
        </div>
        <div class="form-group">
                @foreach($maintenance->images as $image)
                    <img src="/images/maint/{{ $image->image }}" alt="" style="width:100px;">
                        <div style="margin:10px;">
                            <img width="50px" src="" alt="" id="image{{ $image->id }}">
                            <input id="input-file{{ $image->id }}" class="upload-image" type="file" name="photos{{ $image->id }}"
                                accept="image/jpeg, image/png">
                        </div>
                    @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
