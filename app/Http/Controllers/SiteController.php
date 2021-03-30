<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;
use App\Vip;
use App\Blog_rus;
use App;
use App\Covid;

class SiteController extends Controller
{
    public function index()
    {
        /* App::setlocale($lang);
        dd( app()->getLocale()); */
        $covid = Covid::find('1')->first();
    if(app()->getLocale()== 'en'){
        $blogs = News::orderBy('id', 'DESC')->get();

        }else{

        $blogs = Blog_rus::orderBy('id', 'DESC')->get();

    }
     return view('sitePages.index',compact('blogs','covid','blogs'));

    }
    public function about()
    {
        if(app()->getLocale()== 'en'){
            $blogs = News::orderBy('id', 'DESC')->get();
    
            }else{
    
            $blogs = Blog_rus::orderBy('id', 'DESC')->get();
    
        }        return view ('sitePages.about',compact('blogs'));
    }
    public function vip()
    {
        if(app()->getLocale()== 'en'){
            $blogs = News::orderBy('id', 'DESC')->get();
    
            }else{
    
            $blogs = Blog_rus::orderBy('id', 'DESC')->get();
    
        }        $vips = Vip::all();
        return view ('sitePages.vip',compact('vips','blogs'));
    }
    public function single_news($lang,$id)
    {
        if(app()->getLocale()== 'en'){
            $blogs = News::orderBy('id', 'DESC')->get();
            $blog = News::find($id);

            }else{
            $blog = Blog_rus::find($id);
            $blogs = Blog_rus::orderBy('id', 'DESC')->get();
    
        }        
        return view ('sitePages.single_news',compact('blog','blogs'));
    }
}
