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
            <h3>{{__('renovations_page.title_property_maintenance') }}</h3>
            <p>{{__('renovations_page.transforming_homes_description') }}</p>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-12 slikaDRM mb-4 pl-4 pr-0">
            <img src="/assets/images/renovationR.png" alt="">
        </div>

      
    </div>
  
    <div class="section3 ">
        <div class="padding  "> 
            <h3 class=""> {{__('renovations_page.title_department_services') }}  </h3>
            <ul class="list-unstyled ">
                <li> - &nbsp; &nbsp; &nbsp; {{__('renovations_page.department_services_nabrajanje1') }}</li>
                <li> - &nbsp; &nbsp; &nbsp; {{__('renovations_page.department_services_nabrajanje2') }} </li>
                <li> - &nbsp; &nbsp; &nbsp;{{__('renovations_page.department_services_nabrajanje3') }} </li>
           

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
                <h3>{{__('maintenance_page.title_form')}} </h3>
            </div>
            <div class="form_inquiry">
                <div class="form-row m-0">
                    <div class="form-group col-md-6 form_inquiry_left">
                        <label for="name">{{__('maintenance_page.form_your_name')}}</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="{{__('maintenance_page.form_your_name_placeholder')}} " required>
                            <div class="valid-feedback">
                                        Looks good!
                                    </div>
                    </div>
                    <div class="form-group col-md-6 form_inquiry_right ">
                        <label for="email">{{__('maintenance_page.form_email_adress')}}</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="{{__('maintenance_page.form_email_placeholder')}}" required>
                            <div class="valid-feedback">
                                        Looks good!
                                    </div>
                    </div>
                </div>
                    <div class="form-group  form_inquiry_bot ">
                        <label for="message">{{__('maintenance_page.form_message')}}</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" required>{{__('maintenance_page.form_message_placeholder')}}</textarea>
                        <div class="valid-feedback">
                                        Looks good!
                                    </div>
                    
                </div>
            </div>
            <div class="form-group btnI text-center">
              <button type="submit" class="btn btn-inquiry">{{__('maintenance_page.button_send_inqury')}}</button>
              <p>{{__('maintenance_page.button_send_inqury_description')}}</p>
          </div>

         

    </form>
    </div>

  
    </div>

@endsection
