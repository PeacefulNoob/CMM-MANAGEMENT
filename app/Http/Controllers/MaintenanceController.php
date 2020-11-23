<?php

namespace App\Http\Controllers;

use App\Maintenance;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use Gate;
use App\MImage;

class MaintenanceController extends Controller
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
        $maintenances = Maintenance::all();
        return view('sitePages.maintenances',compact('maintenances'));
    }
    public function index1()
    {
        $maintenances = Maintenance::all();
        return view('admin.all_maintenances',compact('maintenances'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenances.createMaintenance');

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
        $maintenance = new Maintenance;
        $maintenance->title = $request->input('title');
        $maintenance->description = $request->input('description');
        $maintenance->user_id =  $userId;
        $maintenance->save();

        if($request->hasfile('photos'))
        {
           foreach($request->file('photos') as $file)
           {
               $name = round(microtime(true) * 1000).'.'.$file->extension();
               $file->move(public_path().'/images/maint/', $name);
               $data[] = $name;
   
               $image= new MImage();
               $image->name=json_encode($data);
               DB::table('maintenance_images')
                   ->insert(
                       ['image' => $name,
                       'maintenance_id' =>  $maintenance->id]
                   );
           }
   
        }

        return redirect()->back()->with('success', 'Successfully created new Maintenance packet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maintenance = Maintenance::find($id);

        return view('maintenances.editMaintenance',compact('maintenance'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenance $maintenance)
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
      
        Maintenance::find($maintenance->id)->update($request->all());

        foreach($maintenance->images as $image){
           $i = $image->id;
            if($request->hasfile('photos'.$i))
            {
                $im = DImage::where('id', $i)->first();
                if($im) {
                        $name = round(microtime(true) * 1000).'.'.$request->file('photos'.$i)->extension();
                        $request->file('photos'.$i)->move(public_path().'/images/maint/', $name);
                        DB::table('maintenance_images')
                        ->where('id', $im->id)
                        ->update(
                            ['image' => $name
                           ]
                        );
                }
            }
        }
        return redirect()->back()->with('success', 'Successfully updated maintenance packet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $maintenance)
    {
             $maintenance->delete();
             return redirect()->back()->with('success', 'Successfully deleted maintenance packet');
            }
   
}
