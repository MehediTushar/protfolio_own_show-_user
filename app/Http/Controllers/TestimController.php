<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Testimonial;

class TestimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'name'=>'required|string',
            'big_img'=>'required',

        ]);

        $testsmoni=new Testimonial;
        $testsmoni->title=$request->title;
        $testsmoni->name=$request->name;
        $images=$request->file('big_img');
        Storage::putFile('public/img/',$images);
        $testsmoni->big_img="storage/img/".$images->hashName();

        $testsmoni->save();

        return redirect()->route('admin.testmoni.create')->with('success',"data create successfully");

    }

    public function view()
    {
        $testsmoni=Testimonial::all();
        return view('pages.testimonial.view',compact('testsmoni'));
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
        $testsmoni=Testimonial::find($id);
        return view('pages.testimonial.edit',compact('testsmoni'));
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
        $this->validate($request,[
            'title'=>'required|string',
            'name'=>'required|string',
            'big_img'=>'required',

        ]);

        $testsmoni=Testimonial::find($id);
        $testsmoni->title=$request->title;
        $testsmoni->name=$request->name;

        if($request->file('big_img'))
        {
            $images=$request->file('big_img');
            Storage::putFile('public/img/',$images);
            $testsmoni->big_img="storage/img/".$images->hashName();

        }


        $testsmoni->save();

        return redirect()->route('admin.testmoni.view')->with('success',"data update successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $testsmoni=Testimonial::find($id);
       @unlink(public_path($testsmoni->big_img));
       $testsmoni->delete();

       return redirect()->route('admin.testmoni.view')->with('success',"data delete successfully");

    }
}
