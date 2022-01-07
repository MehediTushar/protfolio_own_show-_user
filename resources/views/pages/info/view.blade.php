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
                            <th >Title</th>
                            <th>Designation</th>
                            <th>Date Of Birth</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Blood Group</th>
                            <th>Image</th>
                            <th>Resume</th>
                            <th>Address</th>
                            <th>Create At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($infos)>0)
                            @foreach ($infos as $info)
                        <tr>
                            <td>{{$info->id}}</td>
                            <td>{{$info->title}}</td>
                            <td>{{$info->designation}}</td>
                            <td>{{$info->dob}}</td>
                            <td>{{$info->phone}}</td>
                            <td>{{$info->email}}</td>
                            <td>@if ($info->gender ==1)
                                <span class="label label-success">{{'Male'}}</span>
                                @elseif ($info->gender==2)
                                <span class="label label-primary">{{'Female'}}</span>
                                @elseif ($info->gender==3)
                                <span class="label label-info">{{'Others'}}</span>
                                @else
                                <span class="label label-info">{{'Not Defined'}}</span>

                            @endif

                            <td>@if($info->blood_group==1)
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

                            @endif
                            </td>

                            <td><img style="height: 5vh" src="{{url($info->image)}}"></td>
                            <td>{{ url($info->resume)}}</td>
                            <td>{{ $info->address}}</td>
                            <td>{{$info->created_at->diffForHumans()}}</td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-success btn-sm btn-icon-text mr-3" href="{{route('admin.info.edit',$info->id)}}" role="button">Edit <i class="typcn typcn-edit btn-icon-append"></i></a>
                                <a class="btn btn-info btn-sm btn-icon-text mr-3" href="{{route('admin.info.show',$info->id)}}" role="button">View <i class="typcn typcn-view btn-icon-append"></i></a>
                                <div class="col">
                                <form action="{{route('admin.info.destroy',$info->id)}}" method="post" >
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

