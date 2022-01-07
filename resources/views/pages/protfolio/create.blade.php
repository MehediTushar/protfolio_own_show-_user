@extends('layouts.admin_layouts')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Main Form</h4>
                  <form action="{{route('admin.protfolio.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}

                    <div class="form-group row">
                            <label for="title">Title</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                              </div>
                    </div>

                    <div class="form-group row">
                        <label for="pro_link">Share Link</label>
                        <div class="col-sm-6">
                            <input type="url" class="form-control" name="pro_link" id="pro_link" placeholder="share link">
                          </div>
                </div>

                    <div class="form-group row">
                        <label for="description" class="col-form-label">Description</label>
                        <div class="col-sm-6">
                            <textarea class="form-control"  name="description" id="description" rows="5"></textarea>

                        </div>
                      </div>

                        <div class="form-group row">
                            <label for="big_img">Image</label>
                            <input type="file" class="form-control" name="big_img" id="big_img">

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

