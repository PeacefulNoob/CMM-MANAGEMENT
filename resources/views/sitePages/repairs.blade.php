@extends('layouts.master')

@section('content')
<style>
    .header {
        position: relative !important;

    }

    .homeMain {
        padding-top: 2%;
    }

</style>
<div class="homeMain designs_page ">

    <div class="padding text-center section1">
        <h1>Renovations & Repairs </h1>
    </div>
    <div class="row section2 mx-0 padding">
        <div class="col-lg-5 col-md-5 col-sm-12 col-12 p-0">
            <h3>Transforming homes into our clients’ dream visions</h3>
            <p>Even though the real estate is brand new, or old one, there is always need to renovate and repair something. Home renovation can increase the value of your home for sale or simply make your home more comfortable to live in now.</p>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-12 slikaDRM mb-4 pl-4 pr-0">
            <img src="/assets/images/renovationR.png" alt="">
        </div>

      
    </div>
  
    <div class="section3 ">
        <div class="padding  "> 
            <h3 class=""> Services that we offer: </h3>
            <ul class="list-unstyled ">
                <li> - &nbsp; &nbsp; &nbsp; Payment of utility services </li>
                <li> - &nbsp; &nbsp; &nbsp; Checking the communications </li>
                <li> - &nbsp; &nbsp; &nbsp; Airing real estate </li>
                <li> - &nbsp; &nbsp; &nbsp; Cleaning the property </li>
                <li> - &nbsp; &nbsp; &nbsp; Airport transfer </li>
                <li> - &nbsp; &nbsp; &nbsp; General cleaning before client`s arrival </li>
                <li> - &nbsp; &nbsp; &nbsp; Photo report</li>
                <li> - &nbsp; &nbsp; &nbsp; Manager assistance</li>

            </ul>
    </div>
    <img src="/assets/images/repairsImage.png" class="slikaRepairs" alt="">

    </div>
    <div class="section4 row mx-0 padding">
          <img src="/assets/images/furnishingCover.png" alt="">
    </div>
    <div class="section5 padding">
    <form action="{{ route('contact.store.main') }}" method="POST" class="form-property needs-validation">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" name="title" id="title" value="Renovations & Repairs">

               <div class="form-group">
                    <h3> IF YOU ARE INTERESTED IN Renovations & Repairs </h3>
                </div>
                <div class="form_inquiry">
                    <div class="form-row m-0">
                        <div class="form-group col-md-6 form_inquiry_left">
                            <label for="name">YOUR NAME</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Put the name and surname please " required>
                                <div class="valid-feedback">
                                            Looks good!
                                        </div>
                        </div>
                        <div class="form-group col-md-6 form_inquiry_right ">
                            <label for="email">E-MAIL ADRESS?</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Put your e-mail adress please" required>
                                <div class="valid-feedback">
                                            Looks good!
                                        </div>
                        </div>
                    </div>
                        <div class="form-group  form_inquiry_bot ">
                            <label for="message">MESSAGE</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="7" required>What may we help you with?</textarea>
                            <div class="valid-feedback">
                                            Looks good!
                                        </div>
                        
                    </div>
                </div>
                <div class="form-group btnI text-center">
                  <button type="submit" class="btn btn-inquiry">SEND INQURY</button>
                  <p>Our agent will get back to you with the answer as soon as possible</p>
              </div>

             

        </form>
    </div>

  
    </div>

@endsection
