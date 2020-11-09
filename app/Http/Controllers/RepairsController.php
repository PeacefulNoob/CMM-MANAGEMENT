<?php

namespace App\Http\Controllers;

use App\Repair;
use Illuminate\Http\Request;

class RepairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs = Repair::all();
        return view('sitePages.repairs',compact('repairs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repairs.createRepair');

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
        $repair = new Repair;
        $repair->title = $request->input('title');
        $repair->description = $request->input('description');
        $repair->user_id =  $userId;
        $repair->save();

        if($request->hasfile('photos'))
        {
           foreach($request->file('photos') as $file)
           {
               $name = round(microtime(true) * 1000).'.'.$file->extension();
               $file->move(public_path().'/images/repair/', $name);
               $data[] = $name;
   
               $image= new RImage();
               $image->name=json_encode($data);
               DB::table('repair_images')
                   ->insert(
                       ['image' => $name,
                       'repair_id' =>  $repair->id]
                   );
           }
   
        }

        return redirect()->back()->with('success', 'Repair packet added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repair = Repair::find($id);

        return view('repairs.editRepair',compact('repair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repair $repair)
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
    
        Repair::find($repair->id)->update($request->all());

        foreach($repair->images as $image){
           $i = $image->id;
            if($request->hasfile('photos'.$i))
            {
                $im = RImage::where('id', $i)->first();
                if($im) {
                        $name = round(microtime(true) * 1000).'.'.$request->file('photos'.$i)->extension();
                        $request->file('photos'.$i)->move(public_path().'/images/repair/', $name);
                        DB::table('repair_images')
                        ->where('id', $im->id)
                        ->update(
                            ['image' => $name
                           ]
                        );
                }
            }
        }
        return redirect()->back()->with('success', 'Repair packet updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        $repair->delete();
        return redirect()->back();
    }
}
