@extends('layouts.home')

@section('content')

<!-- Page Content-->
<div class="page-content">

    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">uStart</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                            <li class="breadcrumb-item active">Manage Users</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Users</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        
        <div class="row">
            @foreach($users as $user)
            <div class="col-lg-3">
                <div class="card client-card">                               
                    <div class="card-body text-center">                                    
                        <img src="{{$user->profile_pic}}" alt="user" class="rounded-circle thumb-xl">
                        <h5 class=" client-name">{{$user->name}}</h5> 
                        @if($user->status)
                        <span class="badge badge-md badge-success">Profile is Active</span>
                        @else
                        <span class="badge badge-md badge-danger">Profile is Deactivate</span>
                        @endif
                        <br>
                        <br>
                        <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>{{$user->city}}</span>
                        <br>
                        <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>{{$user->telephone}}</span>
                        <br>
                        <span  class="text-muted"><i class="dripicons-calendar mr-2 text-info"></i>{{$user->joined_date}}</span>
                        
                        <br><br>
                        <button type="button" class="btn btn-sm btn-gradient-pink">&nbsp; &nbsp; View &nbsp; &nbsp; </button>
                        <button type="button" class="btn btn-sm btn-gradient-primary">&nbsp; &nbsp; Edit &nbsp; &nbsp; </button>
                        <button type="button" class="btn btn-sm btn-gradient-warning">Message</button>
                    </div><!--end card-body-->                                                                     
                </div><!--end card-->
            </div><!--end col-->   
            @endforeach
        </div><!--end row-->
        
        

 


@endsection