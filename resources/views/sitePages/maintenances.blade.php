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
        <h1>{{__('maintenance_page.title_page_property_maintenance')}}</h1>
    </p>
    </div>
    <div class="row section2 mx-0 padding">
        <div class="col-lg-5 col-md-5 col-sm-12 col-12 p-0">
            <h3>{{__('maintenance_page.section_title_we_value_your_trust')}}</h3>
            <p>{{__('maintenance_page.we_value_your_trust_description')}} </p>
            <p> {{__('maintenance_page.we_value_your_trust_description1')}}</p>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-12 slikaDRM mb-4 pl-4 pr-0">
            <img src="/assets/images/propertyM.png" alt="">
        </div>

        <p>{{__('maintenance_page.we_value_your_trust_description2')}}</p>
    </div>
  
    <div class="section3 ">
        <div class="padding  "> 
        <h3>{{__('maintenance_page.title_services')}} </h3>
        <ul class="list-unstyled col-12 col-lg-6 col-md-6 col-sm-12">
            <li> - &nbsp; &nbsp; &nbsp;{{__('maintenance_page.services_description_nabrajanje1')}} </li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('maintenance_page.services_description_nabrajanje2')}}</li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('maintenance_page.services_description_nabrajanje3')}} </li>
            <li> - &nbsp; &nbsp; &nbsp;{{__('maintenance_page.services_description_nabrajanje4')}} </li>
        </ul>
        <ul class="list-unstyled col-12 col-lg-6 col-md-6 col-sm-12">
            <li> - &nbsp; &nbsp; &nbsp; {{__('maintenance_page.services_description_nabrajanje5')}} </li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('maintenance_page.services_description_nabrajanje6')}} </li>
            <li> - &nbsp; &nbsp; &nbsp;{{__('maintenance_page.services_description_nabrajanje7')}}</li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('maintenance_page.services_description_nabrajanje8')}}</li>
        </ul>
    </div>
        <img src="/assets/images/maintImage.png" class="slikaRepairs" alt="">

    </div>
    <div class="section4 row mx-0 padding">
            <h3>{{__('maintenance_page.title_building_maintenance')}} </h3>
            <p>{{__('maintenance_page.building_maintenance_description')}}  </p>
    </div>
    <div class="section6 row mx-0 ">
    <h1>{{__('maintenance_page.title_property_maintenance_packages')}}</h1>
 
    
    <div class="owl-navigation owl-carousel packet_slider owl-theme my-5 ">
             <div class="packet maintPacket p-4">
                    <p>{{__('maintenance_page.sub_title_property_maintenance')}}</p>
                        <h3>{{__('maintenance_page.exterior_maintenance_title')}}</h3>
                        <div>
                            <ul>
                                <li>{{__('maintenance_page.exterior_maintenance_description_nabrajanje1')}}</li>
                                <li>{{__('maintenance_page.exterior_maintenance_description_nabrajanje2')}}</li>
                                <li> {{__('maintenance_page.exterior_maintenance_description_nabrajanje3')}}</li>
                                <li> {{__('maintenance_page.exterior_maintenance_description_nabrajanje4')}} </li>
                                <li> {{__('maintenance_page.exterior_maintenance_description_nabrajanje5')}}</li>
                                <li> {{__('maintenance_page.exterior_maintenance_description_nabrajanje6')}} </li>
                                <li>{{__('maintenance_page.exterior_maintenance_description_nabrajanje7')}}</li>
                                <li> {{__('maintenance_page.exterior_maintenance_description_nabrajanje8')}}</li>
                            </ul>
                        </div>
                        <a href="/">{{__('design_page.view_all_details')}}</a>
              </div>
              <div class="packet maintPacket p-4">
                    <p>{{__('maintenance_page.sub_title_property_maintenance')}}</p>
                        <h3>{{__('maintenance_page.interior_maintenance_title')}}</h3>
                    
                        <div>
                            <ul>
                                <li> {{__('maintenance_page.interior_maintenance_description_nabrajanje1')}}</li>
                                <li> {{__('maintenance_page.interior_maintenance_description_nabrajanje2')}} </li>
                                <li> {{__('maintenance_page.interior_maintenance_description_nabrajanje3')}} </li>
                                <li> {{__('maintenance_page.interior_maintenance_description_nabrajanje4')}} </li>
                                <li> {{__('maintenance_page.interior_maintenance_description_nabrajanje5')}} </li>
                                <li> {{__('maintenance_page.interior_maintenance_description_nabrajanje6')}} </li>
                                <li> {{__('maintenance_page.interior_maintenance_description_nabrajanje7')}}</li>
                                <li> {{__('maintenance_page.interior_maintenance_description_nabrajanje8')}}</li>
                            </ul>
                      </div>
                        <a href="/">{{__('design_page.view_all_details')}}</a>
                </div>
       </div>
    </div>

    <div class="section5 padding">
        <form action="{{ route('contact.store.main') }}" method="POST" class="form-property needs-validation">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" name="title" id="title" value="PROPERTY MAINTENANCE">

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
