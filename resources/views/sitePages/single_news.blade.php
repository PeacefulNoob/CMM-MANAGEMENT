@extends('layouts.master')
@section('content')
<style>
.header{
  position: relative;
}
p {
    font-weight: inherit;
}
</style>
<div class="homeMain">
    <div class="paddinglr single_news_section my-5">
           <div class="single_news_header pb-3">
                <img class="" src="/{{ $blog->image }}" class="blogMainImage" alt="Card image cap">
           </div>
           <div class="single_news_title pb-1 pt-2">
                 <h2>{{ $blog->title }}</h2>
           </div>
           <div class="single_news_date py-1">
                 <p>Published :       {{ $blog->created_at->formatLocalized('%a, %b %d, %Y ') }}</p>
           </div>
           <div class="single_news_body py-2">
                 <p>{!! $blog->description !!}</p>
           </div>
    </div>
    <div class="paddinglr single_news_blog">
            <div class="owl-navigation owl-carousel blogs_owl owl-theme ">
                @foreach($blogs as $blog)
                    <div class="card" style="border:none">
                    <a href="/{{app()->getLocale()}}/single_news/{{$blog->id}}">
                        <img class="card-img-top blog_image" src="/{{ $blog->image }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">    
                             @php
                                echo substr($blog->title, 0, 60);
                            @endphp...</h5>
                         
                        </div>
                        <div class="card-footer">
                        <p>                            {{ $blog->created_at->formatLocalized('%a, %b %d, %Y ') }}
</p> 
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
</div>
@endsection
