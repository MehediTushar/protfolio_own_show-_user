<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Protfolio;

class ProtfolioController extends Controller
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
       return view('pages.protfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $protfolios=Protfolio::latest()->get();
        return view('pages.protfolio.view',compact('protfolios'));
    }
    public function store(Request $request)
    {

        $this->validate($request,[
            'title'=>'required|string',
            'description'=>'required|string',
            'big_img'=>'required|image',
        ]);

        $protfolios=new Protfolio;
        $protfolios->title=$request->title;
        $protfolios->description=$request->description;
        $protfolios->pro_link=$request->pro_link;
        $images=$request->file('big_img');
        Storage::putFile('public/img/',$images);
        $protfolios->big_img="storage/img/".$images->hashName();

        $protfolios->save();

        return redirect()->route('admin.protfolio.create')->with('success',"Data Create Successfully");

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
        $protfolios=Protfolio::find($id);
        return view('pages.protfolio.edit',compact('protfolios'));
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
            'description'=>'required|string',
            'big_img'=>'required|image',
        ]);

        $protfolios=Protfolio::find($id);
        $protfolios->title=$request->title;
        $protfolios->description=$request->description;
        $protfolios->pro_link=$request->pro_link;
        if($request->file('big_img'))
        {
            $images=$request->file('big_img');
            Storage::putFile('public/img/',$images);
            $protfolios->big_img="storage/img/".$images->hashName();
        }

        $protfolios->save();

        return redirect()->route('admin.protfolio.view')->with('success',"Data Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
