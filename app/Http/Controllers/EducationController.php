<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Education;



class EducationController extends Controller
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
        return view('pages.education.create');
    }

    public function view()
    {
        $educations=Education::all();
        return view('pages.education.view',compact('educations'));
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
            'institute_name'=>'required|string',
            'institute_dep'=>'required|string',
            'district'=>'required|string',
            'gpa'=>'required',
            'strat_date'=>'required|date',
            'end_date'=>'required|date',
            'paasing_year'=>'required|date',
        ]);
        $educations=new Education;
        $educations->institute_name=$request->institute_name;
        $educations->institute_dep=$request->institute_dep;
        $educations->district=$request->district;
        $educations->gpa=$request->gpa;
        $educations->strat_date=$request->strat_date;
        $educations->end_date=$request->end_date;
        $educations->paasing_year=$request->paasing_year;

        $educations->save();

        return redirect()->route('admin.edu.create')->with('success',"Data create successfully");


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
        $educations=Education::find($id);
        return view('pages.education.edit',compact('educations'));
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
            'institute_name'=>'required|string',
            'institute_dep'=>'required|string',
            'district'=>'required|string',
            'gpa'=>'required',
            'strat_date'=>'required|date',
            'end_date'=>'required|date',
            'paasing_year'=>'required|date',
        ]);
        $educations=Education::find($id);
        $educations->institute_name=$request->institute_name;
        $educations->institute_dep=$request->institute_dep;
        $educations->district=$request->district;
        $educations->gpa=$request->gpa;
        $educations->strat_date=$request->strat_date;
        $educations->end_date=$request->end_date;
        $educations->paasing_year=$request->paasing_year;

        $educations->save();

        return redirect()->route('admin.edu.view')->with('success',"Data Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $educations=Education::find($id);
       $educations->delete();
       return redirect()->route('admin.edu.view')->with('success',"Data Deleted Successfully");
    }
}
