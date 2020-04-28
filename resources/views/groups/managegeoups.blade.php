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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Groups</a></li>
                            <li class="breadcrumb-item active">Manage Group</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Coustomers Groups</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!-- end page title end breadcrumb -->



        <div class="row">
            @foreach($info as $infos =>$info_list)
            <div class="col-lg-3">




                <div class="card team-card">
                    <div class="card-body">

                        @foreach ($info_list as $info_lists =>$info_listx)
                        <p class="text-muted font-12"></p>
                        <div class="text-center">
                            <img src="{{$info_lists}}" alt="" style="height: 80px"; width="80px"
                                class="rounded-circle user-img img-thumbnail">
                                @endforeach



                            <h4 class="team-leader">{{$infos}}</h4>
                            <ul class="list-inline language-skill mb-4">

<div class="float-left pl-2" style="text-align: left">
                                @foreach ($info_listx as $user)
                                <div class="pt-1">
                                <a class="user-avatar user-avatar-group" href="#">
                                    <img src="{{$user->cusprofilepic}}" alt="user" class="rounded-circle thumb-xs">
                                </a>
                                <li class="list-inline-item">{{$user->cusname}}</li><br>
                            </div>
                                @endforeach
                            </div>                              

                                {{-- <li class="list-inline-item">
                                    <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                </li> --}}
                            </ul>
                        </div>
                        
                        <!--end img-group-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->




            </div>
            <!--end col-->
            @endforeach

        </div>
        <!--end row-->


        @endsection