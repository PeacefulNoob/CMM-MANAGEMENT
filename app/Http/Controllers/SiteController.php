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

}
