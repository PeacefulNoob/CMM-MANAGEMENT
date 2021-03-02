@extends('layouts.master')

@section('content')
@include('components.modal_covid')

<div class="homeMain">
    <div class="hero">
        <div class="hero-image">
            <div class="hero-text">
               
                <h1> {{__('index.title')}}</h1>
            </div>
        </div>
    </div>

  
    <div class="paddinglr property ">
        
        <div class="owl-navigation owl-carousel property-index owl-theme ">
           
            <div class="row m-0 packetMain">
                <div class=" col-12   text-center naslovMain">
                    <h1>{{__('footer.second_slider_title')}}</h1>
                   <p></p>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 col-12">
                    <img src="/assets/images/garden.png" alt="">
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-12 ml-auto">
                    <h3>{{__('footer.second_slider_subtitle')}}</h3>
                    <p>{{__('footer.second_slider_description')}}</p>
                    <a href="/{{app()->getLocale()}}/designs">{{__('footer.read_more')}}</a>
                </div>

            </div>
            
            <div class="row m-0 packetMain">
                <div class="col-12  text-center naslovMain">
                    <h1>{{__('footer.first_slider_title')}}</h1>
                   <p> </p>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 col-12">
                    <img src="/assets/images/propertyM.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-12 ml-auto">
                    <h3>{{__('footer.first_slider_subtitle')}}</h3>
                    <p>{{__('footer.first_slider_description')}}</p>
                    <a href="/{{app()->getLocale()}}/maintenances">{{__('footer.read_more')}}</a>
                </div>

            </div>
            <div class="row m-0 packetMain">
                <div class="col-12  text-center naslovMain">
                    <h1>{{__('footer.third_slider_title')}}</h1>
                   <p> </p>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 col-12">
                    <img src="/assets/images/renovationR.png" alt="">
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-12 ml-auto">
                    <h3>{{__('footer.third_slider_subtitle')}}</h3>
                    <p>{{__('footer.third_slider_description')}}</p>
                    <a href="/{{app()->getLocale()}}/repairs">{{__('footer.read_more')}}</a>
                </div>

            </div>
        </div>
    </div>
    <div class=" blogs_main ">
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
                        <p> {{ $blog->created_at->formatLocalized('%a, %b %d, %Y ') }}</p> 
                      
                        @can('admin')
                            <div class="adminButtons">
                                <a href="{{ route('news.edit',$blog->id) }}"><button
                                        type="button" class="btn btn-primary">Edit</button></a>

                                <form action="{{ route('news.destroy',$blog) }}" method="POST"
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
</div>
@endsection
