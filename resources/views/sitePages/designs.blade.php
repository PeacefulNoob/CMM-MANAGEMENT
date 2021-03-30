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
        <h1>{{__('design_page.title_design')}}</h1>
    </div>
    <div class="row section2 mx-0 padding">
        <div class="col-lg-5 col-md-5 col-sm-12 col-12 p-0">
            <h3>{{__('design_page.subtitle_design_below')}}</h3>
            <p>{{__('design_page.design_description')}} </p>
            <p> {{__('design_page.design_description1')}}</p>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 slikaDRM col-12 mb-4 pl-4 pr-0">
   {{--          <div id="cf">
            <img class="bottom" src="/assets/images/designF1.jpg" />
            <img class="top" src="/assets/images/designF.jpg" />
             </div> --}}
             <div id="xfade2" class="shaddow" >
                <img class="bottom" src="/assets/images/designF1.jpg" />
                <img class="top" src="/assets/images/designF.jpg" />
			</div >
        </div>

        <p>{{__('design_page.design_description2')}}</p>
    </div>

    <div class="section3 ">
    <div class="padding  "> 

        <h3>  {{__('design_page.design_section_CMM_furniture_title')}}</h3>
        <ul class="list-unstyled">
            <li> - &nbsp; &nbsp; &nbsp; {{__('design_page.design_section_CMM_furniture_title_nabrajanje1')}}</li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('design_page.design_section_CMM_furniture_title_nabrajanje2')}} </li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('design_page.design_section_CMM_furniture_title_nabrajanje3')}} </li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('design_page.design_section_CMM_furniture_title_nabrajanje4')}} </li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('design_page.design_section_CMM_furniture_title_nabrajanje5')}} </li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('design_page.design_section_CMM_furniture_title_nabrajanje6')}} </li>
            <li> - &nbsp; &nbsp; &nbsp; {{__('design_page.design_section_CMM_furniture_title_nabrajanje7')}}</li>
        </ul>
    </div>   
         <img src="/assets/images/repairsImage.png" class="slikaRepairs" alt="">
    </div>
    <div class="section4 row mx-0 padding">
       
        <div class="col-12 pt-3 pr-0">
            <h3>{{__('design_page.how_does_furnishing_title')}}</h3>
            <p>{{__('design_page.how_does_furnishing_description')}}</p>
        </div>

    </div>
    <div class="section6 row mx-0 ">
        <h1>{{__('design_page.furnishing_design_packages')}}</h1>
    <div class="owl-navigation owl-carousel packet_slider owl-theme my-5 ">
             <div class="packet designPacket p-4">
             <p>{{__('design_page.subtitle_furnishing_section')}}</p>
                        <h3>{{__('design_page.economy_title')}}</h3>
                    
                        <div><ul>
                            <li> {{__('design_page.economy_nabrajanje1')}}</li>
                            <li>{{__('design_page.economy_nabrajanje2')}}</li>
                            <li> {{__('design_page.economy_nabrajanje3')}}
                                                    </li>
                            <li>{{__('design_page.economy_nabrajanje4')}}</li>
                            <li>{{__('design_page.economy_nabrajanje5')}}</li>
                            <li> {{__('design_page.economy_nabrajanje6')}}</li>
                            </ul>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#fmodal1">{{__('design_page.view_all_details')}}</a>
              </div>
              <div class="packet designPacket p-4">
              <p>{{__('design_page.subtitle_furnishing_section')}}</p>
                        <h3>{{__('design_page.standard_title')}}</h3>
                    
                        <div><ul>
                        <li>{{__('design_page.standard_nabrajanje1')}}/li>
                            <li> {{__('design_page.standard_nabrajanje2')}}</li>
                            <li> {{__('design_page.standard_nabrajanje3')}}
                                                    </li>
                            <li>{{__('design_page.standard_nabrajanje4')}}</li>
                            <li> {{__('design_page.standard_nabrajanje5')}}</li>
                            <li>{{__('design_page.standard_nabrajanje6')}}</li>
                            </ul>
                      </div>
                        <a href="#" data-toggle="modal" data-target="#fmodal2">{{__('design_page.view_all_details')}}</a>
                </div>
                <div class="packet designPacket p-4">
                <p>{{__('design_page.subtitle_furnishing_section')}}</p>
                        <h3>{{__('design_page.premium_title')}}</h3>
                    
                        <div><ul>
                        <li> {{__('design_page.premium_nabrajanje1')}}</li>
                            <li>{{__('design_page.premium_nabrajanje2')}}</li>
                            <li> {{__('design_page.premium_nabrajanje3')}}
                                                    </li>
                            <li>{{__('design_page.premium_nabrajanje4')}}</li>
                            <li>{{__('design_page.premium_nabrajanje5')}}</li>
                            <li> {{__('design_page.premium_nabrajanje6')}}</li>
                            </ul>
                      </div>
                        <a href="#" data-toggle="modal" data-target="#fmodal3">{{__('design_page.view_all_details')}}</a>
                </div>
       </div>
            </div> 
    <div class="section5 padding">
    <form action="{{ route('contact.store.main') }}" method="POST" class="form-property needs-validation">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" name="title" id="title" value="Furnishing & Design">

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

    {{-- 
    <div class="padding designs row my-5 mx-0">
@forelse($designs as $design)
            <div class="col-sm-5">
                <h3>{{ $design->title }}</h3>
    @can('admin')
        <div class="adminButtons">
            <a href="{{ route('designs.edit',$design) }}"><button type="button"
                    class="btn btn-primary">Edit</button></a>

            <form action="{{ route('designs.destroy',$design) }}" method="POST"
                class="float-left">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-warning">Delete</button>
            </form>
        </div>
    @endcan
    <div>
        <p>{!!$design->description!!}</p>
    </div>
</div>

<div class="col-sm-7">
    <div class="row">
        @foreach($design->images as $image)
            <img class="col-6 my-2" src="/images/design/{{ $image->image }}" alt="">
        @endforeach
    </div>

</div>
@empty
<div class="col-sm-12"> NO DESIGNS</div>

@endforelse

</div> --}}
</div>
@endsection
