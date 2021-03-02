@extends('layouts.master')
@section('content')
<style>

  body{
    background-color: #062140;
    color: white;
  }
</style>
<div class="homeMain">
<div class="vip_section1 padding">
  <h1>{{__('vip_page.vip_club_title') }}</h1>
<p>{{__('vip_page.vip_club_description') }} </p>
<p>{{__('vip_page.vip_club_description2') }}</p>
</div>
<img src="/assets/images/vipCover.png" alt="">
<div class="padding vip_section2">
<p>{{__('vip_page.vip_club_description3') }}</p>
<p>{{__('vip_page.vip_club_description4') }}</p>
<div class=" partners pt-5">
<h1 >{{__('vip_page.title_cmm_vip') }} </h1><h3 class="pb-3"> {{__('vip_page.subtitle_cmm_vip') }} </h3>
@forelse ($vips as $vip)
    <div class="vips">
      <a target="_blank" href="{{$vip->address}}">
      <h5>{{$vip->title}}</h5></a>
    </div>
@empty
    
@endforelse
</div>

</div>
</div>
@endsection
