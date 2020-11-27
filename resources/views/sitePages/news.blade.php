@extends('layouts.master')

@section('content')
<style>
    .header{
  position: relative !important;

} 
.homeMain {
  padding-top: 2%;
}
</style>
<div class="homeMain news">

    <div class="paddinglr text-center">
        <h1>Welcome to our blog</h1>
        <p>A short description of the purpose of the blog goes here.</p>
    </div>

        <div class="paddinglr blogs_main row">
                @foreach($news as $new)
                    <div class="card col-3 my-5" style="border:none">
                    <a href="/single_news/{{$new->id}}">
 
                    <img class="card-img-top blog_image" src="{{ $new->image }}" alt="Card image cap">
                    </a>

                        <div class="card-body">
                            <h5 class="card-title">{{ $new->title }}</h5>
    
                        </div>
                        <div class="card-footer">
                            <p> {{ $new->created_at }}</p>
                            @can('admin')
                                <div class="adminButtons">
                                    <a href="{{ route('news.edit',$new->id) }}"><button
                                            type="button" class="btn btn-primary">Edit</button></a>
    
                                    <form action="{{ route('news.destroy',$new) }}" method="POST"
                                        class="float-left">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-warning">Delete</button>
                                    </form>
                                </div>
                            @endcan
                        </div>
                    </div>
    
                @endforeach
    
        </div>
</div>
@endsection
