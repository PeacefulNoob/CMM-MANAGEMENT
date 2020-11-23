<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;
use App\Covid;

class SiteController extends Controller
{
    public function index()
    {
        $covid = Covid::find('1')->first();

     $blogs = News::all();
     return view('sitePages.index',compact('blogs','covid'));

    }
    public function about()
    {
        return view ('sitePages.about');
    }
    public function vip()
    {
        $vips = Vip::all();
        return view ('sitePages.vip',compact('vips'));
    }
    public function single_news($id)
    {
        $blog = News::find($id);
        $blogs = News::all();
        return view ('sitePages.single_news',compact('blog','blogs'));
    }
}
