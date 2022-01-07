<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Main;
use App\Models\Info;
use App\Models\Education;
use App\Models\Exper;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Protfolio;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mains=Main::first();
        $infos=Info::all();
        $eductions=Education::all();
        $expers=Exper::all();
        $services=Service::all();
        $testsmoni=Testimonial::all();
        return view('pages.dashboard',compact('mains','infos','eductions','expers','services','testsmoni'));
    }

    public function resume()
    {
        $mains=Main::first();
        $infos=Info::all();
        $eductions=Education::all();
        $expers=Exper::all();
        $services=Service::all();
        $testsmoni=Testimonial::all();
        return view('pages.resume',compact('mains','infos','eductions','expers','services','testsmoni'));
    }

    public function protfolio()
    {

        $mains=Main::first();
        $infos=Info::all();
        $eductions=Education::all();
        $expers=Exper::all();
        $services=Service::all();
        $testsmoni=Testimonial::all();
        $protfolios=Protfolio::latest()->paginate(5);
        return view('pages.protfolio',compact('mains','infos','eductions','expers','services','testsmoni','protfolios'));


    }

    public function contact()
    {   $mains=Main::first();
        $infos=Info::all();
        $eductions=Education::all();
        $expers=Exper::all();
        $services=Service::all();
        $testsmoni=Testimonial::all();
        $protfolios=Protfolio::latest()->paginate(5);
        return view('pages.contact',compact('mains','infos','eductions','expers','services','testsmoni','protfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
