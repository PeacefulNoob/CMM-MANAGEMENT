<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CMM | Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CMM Management website. ">
    <meta name="keywords" content="real estate,apartments,apartment,house,summer,crna gora,montenegro,enjoy,winter,top,luxury,afordable,reasonable,kotor,sea,house,lovely">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="PeacefulNoob">  

    <meta property="og:image" content="https://cmm-management.com/assets/images/favicon1.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://cmm-management.com/" />
    <meta property="og:title" content="CMM | Management" />
    <meta property="og:description" content="CMM | Management website" />
  
     <link rel="icon" type="image/png" href="/assets/images/favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="/assets/images/favicon.png" type="image/png" sizes="152x152" />
    <link rel="apple-touch-icon-precomposed" href="/assets/images/favicon.png" type="image/png" sizes="120x120" />
    <link rel="apple-touch-icon" href="/assets/images/favicon.png" sizes="180x180" />
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


 <!-- Scripts -->
 <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />


 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


 <!-- Styles -->
 <link href="/assets/css/app.css" rel="stylesheet">
 <link href="/assets/css/responsive.css" rel="stylesheet">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/600fe545c31c9117cb728420/1esv1f5vk';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>
<body>
@auth
<div class='adminHeader'>
<h5>Hello, you have been logged in</h5>
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
@endauth
    @include('layouts.header')

    <div id="app">

        <main class="">
           
            @include('components.alerts')
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
