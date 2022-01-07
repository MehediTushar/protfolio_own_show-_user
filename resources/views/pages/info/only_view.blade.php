@extends('layouts.admin_layouts')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid">
            <h1 class="mt-4">Single View</h1>

            <div class="container">

                @if(count($infos)>0)
                @foreach ($infos as $info)
                <div class="row ">
                    <div class="col-md-4">
                        <div class="image">
                            <img src="{{url($info->image)}}" style="height: 30vh" class="img-thumbnail" alt=""/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="profile-head">
                            <label><span>Create Date:</span> {{$info->created_at->diffForHumans()}}</label>
                            <div class="row">
                                <div class="btn-group" role="group">
                                    <a href="{{route('admin.info.edit',$info->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('admin.info.view')}}" class="btn btn-warning">Back</a>

                                  </div>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="row mt-3">
                    <div class="col-md-8">
                        <div class="id">
                            <label><span>Id:</span> {{$info->id}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="name">
                            <label><span>Title:</span>{{$info->title}}</label>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-8">
                        <div class="designation">
                            <label><span>Designation:</span> {{$info->designation}}</label>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="dob">
                                <label><span>Date Of Birth:</span> {{$info->dob}}</label>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="email">
                            <label><span>Email:</span> {{$info->email}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="phone">
                            <label><span>Mobile Number:</span> {{$info->phone}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gender">
                            <label><span>Gender:</span>@if ($info->gender ==1)
                                <span class="label label-success">{{'Male'}}</span>
                                @elseif ($info->gender==2)
                                <span class="label label-primary">{{'Female'}}</span>
                                @elseif ($info->gender==3)
                                <span class="label label-info">{{'Others'}}</span>
                                @else
                                <span class="label label-info">{{'Not Defined'}}</span>

                            @endif</label>
                        </div>
                    </div>
                </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="blood_group">
                                    <label><span>Blood Group:</span>
                                        @if($info->blood_group==1)
                                        <span class="label label-success">{{'O+'}}</span>
                                        @elseif ($info->blood_group==2)
                                        <span class="label label-success">{{'O-'}}</span>
                                        @elseif ($info->blood_group==3)
                                        <span class="label label-success">{{'A+'}}</span>
                                        @elseif ($info->blood_group==4)
                                        <span class="label label-success">{{'A-'}}</span>
                                        @elseif ($info->blood_group==5)
                                        <span class="label label-success">{{'AB+'}}</span>
                                        @elseif ($info->blood_group==6)
                                        <span class="label label-success">{{'O-'}}</span>
                                        @elseif ($info->blood_group==7)
                                        <span class="label label-success">{{'B+'}}</span>
                                        @elseif ($info->blood_group==8)
                                        <span class="label label-success">{{'B-'}}</span>
                                        @else
                                        <span class="label label-info">{{'Not Defined'}}</span>

                                    @endif </label>
                                </div>
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-md-8">
                                <div class="resume">
                                    <label><span>Resume:</span> {{url($info->resume)}}</label>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="address">
                                <label><span>Address:</span> {{$info->address}}</label>
                            </div>
                        </div>
                    </div>

                </div>

                    @endforeach
                    @endif

            </div>
        </div>

        <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021<a href="#" class="text-muted" target="_blank">Create My own</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="# class="text-muted" target="_blank"> dashboard</a></span>
                    </div>
                </div>
            </div>
        </footer>

    </div>

</div>

@endsection

