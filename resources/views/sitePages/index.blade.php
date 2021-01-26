@extends('layouts.master')

@section('content')
@include('components.modal_covid')

<div class="homeMain">
    <div class="hero">
        <div class="hero-image">
            <div class="hero-text">
                <h1>PUT YOUR HOME IN TRUSTED HANDS</h1>

            </div>
        </div>
    </div>

    <div class=" blogs_main ">
        <div class="owl-navigation owl-carousel blogs_owl owl-theme ">
            @foreach($blogs as $blog)
                <div class="card" style="border:none">
                    <a href="/single_news/{{$blog->id}}">

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
    <div class="paddinglr property ">
        
        <div class="owl-navigation owl-carousel property-index owl-theme ">
           
            <div class="row m-0 packetMain">
                <div class=" col-12   text-center naslovMain">
                    <h1>Furnishing & Design</h1>
                   <p></p>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 col-12">
                    <img src="/assets/images/garden.png" alt="">
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-12 ml-auto">
                    <h3>You only need to define the stile you like and we will do the rest for you!</h3>
                    <p>Buying real estate in Montenegro with the help of the CMM team is a great choice and just the first step. Now it is our job to furnish your real estate and to create interiors that are a true reflection of you. We focus on designing spaces that represent your personal style and functionality needs, paired with our unique and timeless design concepts. Our goal is to guide you through this process lightly, as the CMM team is skilled in handling all aspects of a designing, including project management, budget review, and collaborating with the best furniture salons. Together, we can create the home of your dreams.</p>
                    <a href="/designs">Read more</a>
                </div>

            </div>
            
            <div class="row m-0 packetMain">
                <div class="col-12  text-center naslovMain">
                    <h1>Property Maintenance</h1>
                   <p> </p>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 col-12">
                    <img src="/assets/images/propertyM.png" alt="">
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-12 ml-auto">
                    <h3>We value your trust!</h3>
                    <p>Performing regular maintenance on your home or property is a vital part of maintaining your investment and ensuring it becomes an asset to you rather than a liability. Repairs or replacement of many common household items will eventually be required, however, with a little planning and foresight, doing regular maintenance will go a long way to saving you money and reducing your level of stress. </p>
                    <a href="/maintenances">Read more</a>
                </div>

            </div>
            <div class="row m-0 packetMain">
                <div class="col-12  text-center naslovMain">
                    <h1>Renovations & Repairs</h1>
                   <p> </p>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 col-12">
                    <img src="/assets/images/renovationR.png" alt="">
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-12 ml-auto">
                    <h3>Renovating not only restores the house, but restores the story of the home</h3>
                    <p>Even though the real estate is brand new, or old one, there is always need to renovate and repair something. Home renovation can increase the value of your home for sale or simply make your home more comfortable to live in now.</p>
                    <a href="/repairs">Read more</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
