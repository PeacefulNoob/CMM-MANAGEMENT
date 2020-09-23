<?php

namespace App\Http\Controllers;

use App\News;
use Validator;
use Auth;
use DB;
use Gate;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.createNews');

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
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Create 
        $post = new News;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->user_id =  $userId;
        $post->save();


        return redirect()->back()->with('success', 'News post addded');
     
  
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
        return view('news.editNews',compact('new'));
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
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        DB::table('news')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        
        return redirect()->back()->with('success', 'News post '.$news->title.'  updated !');
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
            return redirect()->back()->with('success', 'News post '.$news->title.' deleted.');
        
    
    }
}
