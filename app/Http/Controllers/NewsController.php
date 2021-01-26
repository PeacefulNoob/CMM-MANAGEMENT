<?php

namespace App\Http\Controllers;

use App\News;
use App\NewCategories;
use Validator;
use Auth;
use DB;
use Gate;
use Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:adman')->except('show','all_news');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->get();

         return view('admin.allNews',compact('news'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_news($id)
    {
        if ($id == 0 ) {
            $news = News::all();
        }else{
            $news = News::where('new_categories_id',$id)->get();
        }
        $blogs = News::orderBy('id', 'DESC')->get();

        $categories = NewCategories::all();
         return view('sitePages.news',compact('news','categories','blogs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = NewCategories::all();
        return view('news.createNews',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'new_categories_id' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $dom = new \DomDocument();
        $dom->loadHtml($request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name= "/assets/images/news/" . time().$k.'.jpg';
            $path = public_path() . $image_name;
            Image::make($data)->encode('jpg', 65)->save($path);
            
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $description = $dom->saveHTML();
        
        $file = $request->file('image');
        $extension = $file->getclientOriginalExtension();
        $size = $file->getSize();
        $rand = Str::random(4);
        $photo_name =  time() . '' . $rand . '.' . $extension;
        $path = 'assets/images/news/'.$photo_name;
        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();}) ->save($path);
      
        // Create 
        $post = new News;
        $post->title = $request->input('title');
        $post->description = $description;
        $post->image =  $path;
        $post->new_categories_id = $request->input('new_categories_id');
        $post->user_id =  $userId;
        $post->save();


        return redirect()->back()->with('success', 'Successfully created news post');
     
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::find($id);
        $categories = NewCategories::all();

        return view('news.editNews',compact('new','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = News::find($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'new_categories_id' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $dom = new \DomDocument();
        $dom->loadHtml($request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            if(strlen($data)>140){
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            $image_name= "/assets/images/news/" . time().$k.'.jpg';
            $path = public_path() . $image_name;
            Image::make($data)->encode('jpg', 65)->save($path);
            
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
            }
        }

        $description = $dom->saveHTML();

        if($request->hasfile('image'))
        {       
        $file = $request->file('image');
        $extension = $file->getclientOriginalExtension();
        $size = $file->getSize();
        $rand = Str::random(4);
        $photo_name = 'news-' . time() . '' . $rand . '.' . $extension;
        $path = public_path('assets/images/news/'. $photo_name);
        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();})->save($path);
        }
        else{
            $path = $new->image;
        }
        DB::table('news')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $description,
            'new_categories_id' => $request->new_categories_id,
            'image' => $path,

        ]);
        
        return redirect()->back()->with('success', 'Successfully updated news post '.$new->title.'.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
     /*    if(Gate::denies('adminPriv')){
            return redirect(route('admin.users.index'));
        } */
            $news->delete();
            return redirect()->back()->with('success', 'Successfully deleted news post '.$news->title.'.');
        
    
    }

    
}
