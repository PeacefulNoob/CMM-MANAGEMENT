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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
         return view('admin.allNews',compact('news'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_news()
    {
        $news = News::all();
         return view('sitePages.news',compact('news'));
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
        $post->description = $request->input('description');
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'new_categories_id' => 'required',
            'image' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $file = $request->file('image');
        $extension = $file->getclientOriginalExtension();
        $size = $file->getSize();
        $rand = Str::random(4);
        $photo_name = 'news-' . time() . '' . $rand . '.' . $extension;
        $path = public_path('assets/images/news/'. $photo_name);
        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();})->save($path);
      
        DB::table('news')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'new_categories_id' => $request->new_categories_id,
            'image' => $path,

        ]);
        
        return redirect()->back()->with('success', 'Successfully updated news post '.$news->title.'.');
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
