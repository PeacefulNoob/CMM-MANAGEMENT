<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use Gate;
use App\News;

class FaqController extends Controller
{
     public function __construct()
    {

        $this->middleware('can:adman', ['except' => ['index']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = News::all();

        $faqs= Faq::all();
        return view ('sitePages.faq',compact('faqs','blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              //  $this->authorize('adman', App\Faq::class);

        return view('admin.createFaq');
        
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
            'answer' => 'required',
            'question' => 'required',
           

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Create ad
        $faq = new Faq;
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->user_id =  $userId;
        $faq->save();


        return redirect()->back()->with('success', 'Successfully created new FaQ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $Faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $Faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('adminPriv')){
            return redirect(route('admin.users.index'));
        }
        $faq = Faq::find($id);
        return view('admin.editFaq',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $Faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'answer' => 'required',
            'question' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        DB::table('faqs')->where('id', $id)->update([
            'answer' => $request->answer,
            'question' => $request->question,
        ]);
        
        return redirect()->back()->with('success', 'Successfully updated FaQ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $Faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        if(Gate::denies('adminPriv')){
            return redirect(route('admin.users.index'));
        }
            $faq->delete();
            return redirect()->back()->with('success', 'Successfully deleted FaQ');
        
    }
}
