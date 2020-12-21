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
  <h1>...a pleasant lifestyle that you deserve!</h1>
<p>Our impeccable reputation allowed us to create a unique service for our clients - CMM VIP club! Cooperating with us, you become a member of the CMM VIP club. Membership in this club brings you exceptional benefits, ranging from discounts on the most luxurious and best restaurants, management services to some of your personal wishes and plans. </p>
<p>CMM VIP Club represents a unique lifestyle that caters to a good feeling and a real pleasure. Guided by this goal, we have made sure to make something special for you to make your stay more pleasant. As members of our club enjoy many benefits, get ready to fully experience the charms of our country. You are for us special clients, so it is up to us to do everything to make you feel that way.</p>
</div>
<img src="/assets/images/vipCover.png" alt="">
<div class="padding vip_section2">
<p>By purchasing property in Montenegro, you primarily invest money in your well-being, in your health - both mental and physical. Coming to your cozy apartment with a view of the Adriatic Sea or a country house with a wonderful garden, you will enjoy the tranquility reigning around you and forget the urban everyday bustle. And, of course, visiting this radiant country of the sea and the sun, you want to feel comfortable and leave the worries that haunt you daily. CMM VIP club was created specifically to ensure that when you come to Montenegro, you can get maximum pleasure from your rest and your stay in our country. </p>
<p>Here at CMM VIP Club, we understand that enduring a busy lifestyle can be a challenge. We offer bespoke lifestyle management to give you back your precious time so you can enjoy the things you want to do. No matter which part of the world you come from, your personnel manager will always be at your disposal. This allows you to quickly solve any urgent task and receive timely answers to questions. It is important to us that you feel like you are at home and that you fully experience the lifestyle of Montenegro.</p>
<div class=" partners pt-5">
<h1 >CMM VIP </h1><h3 class="pb-3"> You have someone you can rely on! </h3>
@forelse ($vips as $vip)
    <div class="vips">
      <a href="{{$vip->address}}">
      <h5>{{$vip->title}}</h5></a>
    </div>
@empty
    
@endforelse
</div>

</div>
</div>
@endsection
