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
        <h1>Property Maintenance</h1>
        <p>We value your trust! 
</p>
    </div>
    <div class="row section2 mx-0 padding">
        <div class="col-5 p-0">
            <h3>What does it mean?</h3>
            <p>Buying real estate in Montenegro with the help of the CMM team is a great choice. Now it is our job to
                furnish your apartment and to create interiors that are a true reflection of you. We focus on designing
                spaces that represent your personal style and functionality needs, paired with our unique and timeless
                design concepts. </p>
            <p> Our goal is to guide you through this process in an easy way, as the CMM team is
                skilled in handling all aspects of a design job, including project management, budget review, and
                collaborating with the best furniture salons. Together, we can create the home of your dreams.</p>
        </div>
        <div class="col-7 pb-4 pl-4 pr-0">
            <img src="/assets/images/propertyM.png" alt="">
        </div>

        <p>Being in the business for many years, we have the experience to know what standards will meet your
            expectations. We aim to reduce the expense and relieve the stress of furnishing a property. We work closely
            with local suppliers to be able to offer high quality furniture packages at unbeatable prices.</p>
    </div>
  
    <div class="section3 padding">
        <h3> Services that we offer: </h3>
        <ul class="list-unstyled">
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
    <div class="section4 row mx-0 padding">
            <h3>Building maintenance</h3>
            <p>Building maintenance refers to all tasks necessary for keeping a building functional and livable. Building maintenance includes a variety of tasks that help create a safe and comfortable work or living environment for a building’s tenants. Ranging from anything inside a building, like cleaning bathrooms and maintaining electrical systems, to anything outside a building, like lawn care and landscaping, routine maintenance services are performed to keep properties in tip-top shape. Represent and protect housing rights and interests of owners of premises for general use residential property; Perform work on the proper content, maintenance and repair of common property in residential house. </p>
    </div>
    <div class="section6 row mx-0 padding">
    <h1>Property Maintenance packages:</h1>
    <div class="row my-5">
            @forelse ($maintenances as $maintenance)
            <div class="col-4  p-4">
                <div class="packet p-4">
                    <p>Property Maintenance</p>
                        <h3>{{$maintenance->title}}</h3>
                    
                        <div><p>{!!$maintenance->description!!}</p></div>
                        <a href="/">View all the details</a>
                </div>
            </div>
            @empty
            <div class="col-sm-12"> NO Maintenances</div>
    
            @endforelse
          
        </div> 
        </div> 
    <div class="section5 padding">
        <form action="{{ route('contact.store.main') }}" method="POST" class="form-property">
            {{ csrf_field() }}
               <div class="form-group">
                    <h3> IF YOU ARE INTERESTED IN PROPERTY MAINTENANCE </h3>
                </div>
                <div class="form_inquiry">
                    <div class="form-row m-0">
                        <div class="form-group col-md-6 form_inquiry_left">
                            <label for="name">WHAT IS YOUR NAME</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Put the name and surname please ">
                        </div>
                        <div class="form-group col-md-6 form_inquiry_right ">
                            <label for="email">WHAT IS YOUR E-MAIL ADRESS?</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Put your e-mail adress please">
                        </div>
                    </div>
                        <div class="form-group  form_inquiry_bot ">
                            <label for="message">MESSAGE</label>
                     
                     <textarea class="form-control" name="message" id="message" cols="30" rows="7">What may we help you with?</textarea>
                         
                        
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
