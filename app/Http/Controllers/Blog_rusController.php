<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog_rus;
use App\News;
use App\NewCategories;
use Validator;
use Auth;
use DB;
use Gate;
use Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class Blog_rusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Blog_rus::orderBy('id', 'DESC')->get();
        return view('admin.allNews_rus',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = NewCategories::all();
        return view('news_rus.createNews',compact('categories'));
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
        if ($request->hasFile('image')) 
        {
        $file = $request->file('image');
        $extension = $file->getclientOriginalExtension();
        $size = $file->getSize();
        $rand = Str::random(4);
        $photo_name =  time() . '' . $rand . '.' . $extension;
        $path = 'assets/images/news/'.$photo_name;

        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();}) ->save($path);
         }
        else
        {
            $path= '';
        }
        // Create 
        $post = new Blog_rus;
        $post->title = $request->input('title');
        $post->description = $description;
        $post->image =  $path;
        $post->new_categories_id = $request->input('new_categories_id');
        $post->user_id =  $userId;
        $post->save();


        return redirect()->back()->with('success', 'Successfully created rus news post');
     
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = Blog_rus::find($id);
        $categories = NewCategories::all();

        return view('news_rus.editNews',compact('new','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = Blog_rus::find($id);

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
        $store_path= 'assets/images/news/'. $photo_name;
        $path = public_path( $store_path);
        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();})->save($path);
        }
        else{
            $store_path = $new->image;
        }
        DB::table('blog_ruses')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $description,
            'new_categories_id' => $request->new_categories_id,
            'image' => $store_path,

        ]);
        
        return redirect()->back()->with('success', 'Successfully updated rus news post '.$new->title.'.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = Blog_rus::find($id);
        $new->delete();
        return redirect()->back()->with('success', 'Successfully deleted rus news post '.$new->title.'.');
    
    }
}
