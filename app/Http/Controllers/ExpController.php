<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exper;


class ExpController extends Controller
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
        return view('pages.experience.create');
    }

    public function view()
    {
        $expers=Exper::all();
        return view('pages.experience.view',compact('expers'));
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
            'company_name'=>'required|string',
            'designate'=>'required|string',
            'project_title'=>'required|string',
            'project_desc'=>'required|string',
            'experience'=>'required',
            'client'=>'required|string',
            'strat_date'=>'required|date',
            'end_date'=>'required|date',
        ]);

        $expers=new Exper;
        $expers->company_name=$request->company_name;
        $expers->designate=$request->designate;
        $expers->project_title=$request->project_title;
        $expers->project_desc=$request->project_desc;
        $expers->experience=$request->experience;
        $expers->client=$request->client;
        $expers->strat_date=$request->strat_date;
        $expers->end_date=$request->end_date;
        $expers->save();
        return redirect()->route('admin.exper.view')->with('sucess',"new Data Create Successfully");

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
        $expers=Exper::find($id);
        return view('pages.experience.edit',compact('expers'));
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
            'company_name'=>'required|string',
            'designate'=>'required|string',
            'project_title'=>'required|string',
            'project_desc'=>'required|string',
            'experience'=>'required',
            'client'=>'required|string',
            'strat_date'=>'required|date',
            'end_date'=>'required|date',
        ]);

        $expers=Exper::find($id);
        $expers->company_name=$request->company_name;
        $expers->designate=$request->designate;
        $expers->project_title=$request->project_title;
        $expers->project_desc=$request->project_desc;
        $expers->experience=$request->experience;
        $expers->client=$request->client;
        $expers->strat_date=$request->strat_date;
        $expers->end_date=$request->end_date;
        $expers->save();
        return redirect()->route('admin.exper.view')->with('sucess',"new Data update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expers=Exper::find($id);
        $expers->delete();
        return redirect()->route('admin.exper.view')->with('sucess',"new Data delete Successfully");

    }
}
