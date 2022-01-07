<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Info;

class InfoController extends Controller
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
        return view('pages.info.create_info');
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
        'designation'=>'required|string',
        'dob'=>'required|date',
        'email'=>'required|string',
        'address'=>'required|string',
        'phone'=>'required|string',

       ]);

       $infos=new Info;
       $infos->title=$request->title;
       $infos->designation=$request->designation;
       $infos->dob=$request->dob;
       $infos->email=$request->email;
       $infos->address=$request->address;
       $infos->phone=$request->phone;
       $infos->gender=$request->gender;
       $infos->blood_group=$request->blood_group;

       $image=$request->file('image');
       Storage::PutFile('public/img/',$image);
       $infos->image="storage/img/".$image->hashName();

       $files=$request->file('resume');
       Storage::PutFile('public/pdf',$files);
       $infos->resume="storage/pdf/".$files->hashName();

       $infos->save();

       return redirect()->route('admin.info.view')->with('success',"Data Create Successfully");




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infos=Info::where('id', $id)->get();
        return view('pages.info.only_view',compact('infos'));
    }

    public function view()
    {
        $infos=Info::all();
        return view('pages.info.view',compact('infos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infos=Info::find($id);
        return view('pages.info.edit',compact('infos'));
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
            'designation'=>'required|string',
            'dob'=>'required|date',
            'email'=>'required|string',
            'address'=>'required|string',
            'phone'=>'required|string',

           ]);

           $infos=Info::find($id);
           $infos->title=$request->title;
           $infos->designation=$request->designation;
           $infos->dob=$request->dob;
           $infos->email=$request->email;
           $infos->address=$request->address;
           $infos->phone=$request->phone;
           $infos->gender=$request->gender;
           $infos->blood_group=$request->blood_group;

           if($request->file('image'))
           {
            $image=$request->file('image');
            Storage::PutFile('public/img/',$image);
            $infos->image="storage/img/".$image->hashName();

           }

           if($request->file('resume'))
           {
            $files=$request->file('resume');
            Storage::PutFile('public/pdf',$files);
            $infos->resume="storage/pdf/".$files->hashName();

           }
           $infos->save();

           return redirect()->route('admin.info.view')->with('success',"Data update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infos=Info::find($id);
        @unlink(public_path($infos->image));
        @unlink(public_path($infos->resume));
        $infos->delete();

        return redirect()->route('admin.info.view')->with('success',"Data Deleted Successfully");
    }
}
