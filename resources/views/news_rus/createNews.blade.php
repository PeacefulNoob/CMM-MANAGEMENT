@extends('layouts.app')
@section('content')
<div class="container-fluid adminPage ">
<form action="{{ route('news_rus.store')}}"  method="POST" enctype="multipart/form-data"    class="form-horizontal mb-0">
    @csrf
    <div class="form-group">
      <label for="title">News RUS</label>
      <input type="text" class="form-control"  name="title"  placeholder="Enter post title">
      <small id="text" class="form-text text-muted">Enter new post title</small>
    </div>
    <div class="form-group">
      <label for="description1">Description</label>
      <textarea class="form-control summernote" name="description"></textarea>
    </div>
    <div class="form-group">
            <label for="image">Upload photo</label>
            <input type="file" id="image" name="image">
            <div class="validate"></div>
        </div>
    <div class="form-group">
      <label for="new_categories_id">News Category</label>
      <select name="new_categories_id" id="new_categories_id">
      @foreach($categories as $cat)
       <option value="{{$cat->id}}">{{$cat->title}}</option>
       @endforeach
</select>   
 </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


    <script type="text/javascript">
        $(document).ready(function() {
         $('.summernote').summernote({
               height: 300,
          }); 
        }); 
     /*      $('#summernote').summernote({
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
          ],
          height: 300,
        });
       }); */
    </script>
@endsection
