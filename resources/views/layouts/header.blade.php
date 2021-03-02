
<div class="header">
            <div class="header2 ">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
              <a class="navbar-brand" href="/{{app()->getLocale()}}/"><img src="/assets/images/logo1.png" alt=""></a>

              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto my-2">
                  <li class="nav-item">
                    <a class="nav-link" href= '/{{app()->getLocale()}}/maintenances'><h5>{{__('footer.nav1')}}</h5><h5> {{__('footer.nav12')}}</h5></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="/{{app()->getLocale()}}/designs"><h5>{{__('footer.nav2')}}</h5><h5> {{__('footer.nav22')}}</h5> <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/{{app()->getLocale()}}/repairs"><h5>{{__('footer.nav3')}} </h5><h5>{{__('footer.nav33')}}</h5></a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                    <a class="nav-link" href="/{{app()->getLocale()}}/all_news/0"><h5>{{__('footer.nav4')}}</h5></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="/{{app()->getLocale()}}/about"><h5>{{__('footer.nav5')}} </h5></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/{{app()->getLocale()}}/about#about_contact"><h5>{{__('footer.nav6')}}</h5></a>
                  </li>
                
                  <li class="nav-item vipLink">
                    <a class="nav-link " href="/{{app()->getLocale()}}/vip"><h5> {{__('footer.nav7')}}</h5></a>
                  </li>
                  
                    @foreach (config('app.languages') as $locale)
                 
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('setLocaleRout', $locale) }}"
                                @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </li> 
                    @endforeach
                </ul>
              </div>
            </nav>
        </div> 
      </div> 
    