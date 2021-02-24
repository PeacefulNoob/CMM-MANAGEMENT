<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;
use App\Vip;
use App;
use App\Covid;

class SiteController extends Controller
{
    public function index()
    {
        /* App::setlocale($lang);
        dd( app()->getLocale()); */
        $covid = Covid::find('1')->first();

     $blogs = News::all();
     return view('sitePages.index',compact('blogs','covid','blogs'));

    }
    public function about()
    {
        $blogs = News::all();
        return view ('sitePages.about',compact('blogs'));
    }
    public function vip()
    {
        $blogs = News::all();
        $vips = Vip::all();
        return view ('sitePages.vip',compact('vips','blogs'));
    }
    public function single_news($lang,$id)
    {
        $blog = News::find($id);
        $blogs = News::all();
        return view ('sitePages.single_news',compact('blog','blogs'));
    }
}
