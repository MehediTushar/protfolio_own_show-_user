@extends('layouts.admin_layouts')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                    <h4 class="card-title">Write Experience</h4>
                    <form action="{{route('admin.exper.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                    <label for="company_name">Company Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="project_title">Project Name</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="project_title" id="project_title" placeholder="Project Name">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="project_desc">Project Description</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="project_desc" id="project_desc" placeholder="Project Description">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="designate">Designation</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="designate" id="designate" placeholder="Designation">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="strat_date">Start Date</label>
                                <div class="col-sm-6">
                                <input type="date" class="form-control" name="strat_date" id="strat_date" placeholder="Star Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_date">End Date</label>
                                <div class="col-sm-6">
                                <input type="date" class="form-control" name="end_date" id="end_date" placeholder="End Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="experience">Experience</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="experience" id="experience" placeholder="Experience">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="client">Client</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="client" id="client" placeholder="Client">
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
