@extends('layouts.admin_layouts')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                        <thead>
                        <tr>
                            <th scope="ml-5">#</th>
                            <th >Institute Name</th>
                            <th>DepartMent</th>
                            <th>District</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Passing Year</th>
                            <th>GPA/CGPA</th>
                            <th>Create At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($educations)>0)
                            @foreach ($educations as $educ)
                        <tr>
                            <td>{{$educ->id}}</td>
                            <td>{{$educ->institute_name}}</td>
                            <td>{{$educ->institute_dep}}</td>
                            <td>{{$educ->district}}</td>
                            <td>{{$educ->strat_date}}</td>
                            <td>{{$educ->end_date}}</td>
                            <td>{{$educ->paasing_year}}</td>
                            <td>{{$educ->gpa}}</td>
                            <td>{{$educ->created_at->diffForHumans()}}</td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-success btn-sm btn-icon-text mr-3" href="{{route('admin.edu.edit',$educ->id)}}" role="button">Edit <i class="typcn typcn-edit btn-icon-append"></i></a>
                                <div class="col">
                                <form action="{{route('admin.edu.destroy',$educ->id)}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm btn-icon-text">Delete<i class="typcn typcn-delete-outline btn-icon-append"></i></button>

                                </form>
                                </div>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
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

