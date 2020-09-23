<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;
class SiteController extends Controller
{
    public function index()
    {
     $news = News::all();
     return view('sitePages.index',compact('news'));

    }

}
