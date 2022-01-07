@extends('layouts.admin_layouts')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Main Form</h4>
                  <form action="{{route('admin.info.update',$infos->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                            <label for="title">Title</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="title" id="title" value="{{$infos->title}}" placeholder="Title">
                              </div>
                    </div>
                    <div class="form-group row">
                        <label for="designation">Designation</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" name="designation" id="designation" value="{{$infos->designation}}" placeholder="Designation">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="dob">Date Of Birth</label>
                        <div class="col-sm-6">
                        <input type="date" class="form-control" name="dob" id="dob"  value="{{$infos->dob}}" placeholder="Date Of Birth">
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone">Phone</label>
                        <div class="col-sm-6">
                        <input type="number" class="form-control" name="phone" id="phone" value="{{$infos->phone}}" placeholder="Phone">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="email">Email</label>
                        <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" id="email" value="{{$infos->email}}" placeholder="Email address">
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control" value="{{$infos->gender}}" required autocomplete="gender">
                            <option selected>Choose...</option>
                            <option value="1" @if($infos->gender == 1) selected="selected" @endif><strong>Male</strong></option>
                            <option value="2" @if($infos->gender == 2) selected="selected" @endif><strong>Female</strong></option>
                            <option value="3" @if($infos->gender == 3) selected="selected" @endif><strong>Other</strong></option>
                            </select>
                    </div>
                    <div class="form-group row">
                        <label for="blood_group">Blood Group</label>
                        <select id="blood_group" name="blood_group" class="form-control" required autocomplete="blood_group" >

                            <option selected>Chosse value.....</option>
                            <option value="1" @if($infos->blood_group == 1) selected="selected" @endif >O<sup>+</sup></option>
                            <option value="2" @if($infos->blood_group == 2) selected="selected" @endif >O<sup>-</sup></option>
                            <option value="3" @if($infos->blood_group == 3) selected="selected" @endif >A<sup>+</sup></option>
                            <option value="4" @if($infos->blood_group == 4) selected="selected" @endif >A<sup>-</sup></option>
                            <option value="5" @if($infos->blood_group == 5) selected="selected" @endif >AB<sup>+</sup></option>
                            <option value="6" @if($infos->blood_group == 6) selected="selected" @endif >AB<sup>-</sup></option>
                            <option value="7" @if($infos->blood_group == 7) selected="selected" @endif >B<sup>+</sup></option>
                            <option value="8" @if($infos->blood_group == 8) selected="selected" @endif >B<sup>-</sup></option>

                            </select>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-form-label">Address</label>
                        <div class="col-sm-6">
                            <textarea class="form-control"  name="address" id="address" rows="4">{{$infos->address}}</textarea>
                        </div>
                      </div>
                    <div class="row">
                        <div class="form-group row">
                            <label for="resume">Resume</label>
                            <input type="file" class="form-control" name="resume" value="{{$infos->resume}}" id="resume">

                        </div>
                        <div class="form-group row">
                            <label for="image">Image</label>
                            <img style="height: 30vh" src="{{url($infos->image)}}" class="img-thumbnail">
                            <input type="file" class="form-control" name="image" id="image">

                        </div>
                </div>

                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          Remember me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>

    </div>

    <!-- partial:partials/_footer.html -->
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
    <!-- partial -->
  </div>
@endsection
