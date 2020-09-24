<?php

namespace App\Http\Controllers;

use App\Design;
use App\DImage;
use Validator;
use Auth;
use DB;
use Gate;
use Illuminate\Http\Request;

class DesignContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = Design::all();
        return view('sitePages.designs',compact('designs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('designs.createDesign');

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
        $design = new Design;
        $design->title = $request->input('title');
        $design->description = $request->input('description');
        $design->user_id =  $userId;
        $design->save();

        if($request->hasfile('photos'))
        {
           foreach($request->file('photos') as $file)
           {
               $name = round(microtime(true) * 1000).'.'.$file->extension();
               $file->move(public_path().'/images/', $name);
               $data[] = $name;
   
               $image= new DImage();
               $image->name=json_encode($data);
               DB::table('design_images')
                   ->insert(
                       ['image' => $name,
                       'design_id' =>  $design->id]
                   );
           }
   
        }

        return redirect()->back()->with('success', 'Design packet addded');
     
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function show(Design $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $design = Design::find($id);

        return view('designs.editDesign',compact('design'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Design $design)
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
        DB::table('designs')->where('id', $design->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        
        foreach($design->images as $image){
           $i = $image->id;
            if($request->hasfile('photos'.$i))
            {
                $im = DImage::where('id', $i)->first();
                if($im) {
                        $name = round(microtime(true) * 1000).'.'.$request->file('photos'.$i)->extension();
                        $request->file('photos'.$i)->move(public_path().'/images/', $name);
                        DB::table('design_images')
                        ->where('id', $im->id)
                        ->update(
                            ['image' => $name
                           ]
                        );
                }
            }
        }
        return redirect()->back()->with('success', 'Design packet   updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function destroy(Design $design)
    {
        //
    }
}
