@extends('layouts.master')

@section('content')
@include('components.modal_covid')

<div class="homeMain">
    <div class="hero">
        <div class="hero-image">
            <div class="hero-text">
                <h1 style="font-size:50px">Your trusted real estate partner in Montenegro</h1>

            </div>
        </div>
    </div>

    <div class="paddinglr blogs_main ">
        <div class="owl-navigation owl-carousel blogs_owl owl-theme ">
            @foreach($blogs as $blog)
                <div class="card" style="border:none">
                    <img class="card-img-top" src="/{{ $blog->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>

                    </div>
                    <div class="card-footer">
                        <p> {{ $blog->created_at }}</p>
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
           
            <div class="row m-0 ">
                <div class="col-12   text-center naslovMain">
                    <h1>Furnishing & Design</h1>
                   <p>You only need to define the stile you like and we will do the rest for you!</p>
                </div>
                <div class="col-7">
                    <img src="/assets/images/garden.png" alt="">
                </div>
                <div class="col-4 ml-auto">
                    <h3>What does it mean?</h3>
                    <p>Buying real estate in Montenegro with the help of the CMM team is a great choice and just the first step. Now it is our job to furnish your real estate and to create interiors that are a true reflection of you. We focus on designing spaces that represent your personal style and functionality needs, paired with our unique and timeless design concepts. Our goal is to guide you through this process lightly, as the CMM team is skilled in handling all aspects of a designing, including project management, budget review, and collaborating with the best furniture salons. Together, we can create the home of your dreams.</p>
                    <a href="#">Read more</a>
                </div>

            </div>
            
            <div class="row m-0 ">
                <div class="col-12  text-center naslovMain">
                    <h1>Property Maintenance</h1>
                   <p>We value your trust! </p>
                </div>
                <div class="col-7">
                    <img src="/assets/images/propertyM.png" alt="">
                </div>
                <div class="col-4 ml-auto">
                    <h3>What does it mean?</h3>
                    <p>Performing regular maintenance on your home or property is a vital part of maintaining your investment and ensuring it becomes an asset to you rather than a liability. Repairs or replacement of many common household items will eventually be required, however, with a little planning and foresight, doing regular maintenance will go a long way to saving you money and reducing your level of stress. </p>
                    <a href="#">Read more</a>
                </div>

            </div>
            <div class="row m-0 ">
                <div class="col-12  text-center naslovMain">
                    <h1>Renovations & Repairs</h1>
                   <p>Renovating not only restores the house, but restores the story of the home </p>
                </div>
                <div class="col-7">
                    <img src="/assets/images/renovationR.png" alt="">
                </div>
                <div class="col-4 ml-auto">
                    <h3>What does it mean?</h3>
                    <p>Lorem ipsum dolor sit amet, ex veri liberavisse duo. Vivendo qualisque voluptatum duo id. His
                        omittam accusata at. Veri primis eum an, eu eos tota aliquip molestie, duo vide minimum
                        efficiantur an. Ad mucius pertinacia incorrupte duo, alienum repudiare eu sed. Has ea quis
                        torquatos, eum no errem causae persius. Eu vix quem graeci, ex vis omnium definitionem, mel no
                        tantas omnesque facilisis. Voluptua conceptam adversarium ne his, modus partem tincidunt.</p>
                    <a href="#">Read more</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
