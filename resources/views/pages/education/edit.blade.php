@extends('layouts.admin_layouts')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                    <h4 class="card-title">BSC</h4>
                    <form action="{{route('admin.edu.update',$educations->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                    <label for="institute_name">Institute Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="institute_name" value="{{$educations->institute_name}}" id="institute_name" placeholder="Institute Name">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="institute_dep">DepartMent/dis</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="institute_dep" id="institute_dep"  value="{{$educations->institute_dep}}" placeholder="DepartMent/dis">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="district">District</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="district" id="district"  value="{{$educations->district}}" placeholder="District">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="gpa">GPA/CGPA</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="gpa" id="gpa"  value="{{$educations->gpa}}" placeholder="GPA/CGPA">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="strat_date">Start Date</label>
                                <div class="col-sm-6">
                                <input type="date" class="form-control" name="strat_date" id="strat_date" value="{{$educations->strat_date}}" placeholder="Star Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_date">End Date</label>
                                <div class="col-sm-6">
                                <input type="date" class="form-control" name="end_date" id="end_date" value="{{$educations->end_date}}" placeholder="End Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="paasing_year">Passing Year</label>
                                <div class="col-sm-6">
                                <input type="date" class="form-control" name="paasing_year" id="paasing_year"  value="{{$educations->paasing_year}}" placeholder="Passing Year">
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
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="{{route('admin.dashboard')}}" class="text-muted" target="_blank"> dashboard</a></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- partial -->
</div>

@endsection
