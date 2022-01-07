@extends('layouts.admin_layouts')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Main Form</h4>
                  <form action="{{route('admin.service.update',$services->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                            <label for="title">Title</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="title" id="title" value="{{$services->title}}"  placeholder="Title">
                              </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-form-label">Description</label>
                        <div class="col-sm-6">
                            <textarea class="form-control"  name="description" id="description" rows="5">{{$services->description}}</textarea>
                        </div>
                      </div>

                        <div class="form-group row">
                            <label for="img">Image</label>
                            <img style="height: 5vh" src="{{url($services->img)}}" class="img-thumbnail">
                            <input type="file" class="form-control" name="img" id="img">

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

