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
            {{-- @foreach($customer_groups as $customer_group) --}}
            <div class="col-lg-3">


                

                <div class="card team-card">
                    <div class="card-body">
                        <div class=" d-flex justify-content-between">
                            <h4 class="header-title mt-0 d-inline-block">Group ID : </h4>
                            <div class="dropdown d-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel1" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel1">
                                    <a class="dropdown-item" href="#">Create Project</a> 
                                    <a class="dropdown-item" href="#">Open Project</a> 
                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                </div>
                            </div>
                        </div>                                    
                        
                        <div class="text-center">
                            <img src="../assets/images/users/user-4.jpg" alt="" class="rounded-circle user-img img-thumbnail">
                                                                   
                            <h4 class="team-leader">Marnie Flowers</h4>
                            <p class="text-muted font-12">Relevent User</p>
                            <ul class="list-inline language-skill mb-4">
                                <li class="list-inline-item"></li>
                                <li class="list-inline-item"></li>
                                <li class="list-inline-item"></li>
                                <li class="list-inline-item"></li>
                                {{-- <li class="list-inline-item">
                                    <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                </li> --}}
                            </ul>
                        </div> 
                        <small class="float-right font-13 pt-2 text-muted">1 User , 7 Customers</small>
                        <div class="img-group">
                            <a class="user-avatar user-avatar-group" href="#">
                                <img src="../assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                            </a>
                            <a class="user-avatar user-avatar-group" href="#">
                                <img src="../assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                            </a>
                            <a class="user-avatar user-avatar-group" href="#">
                                <img src="../assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                            </a>
                            <a href="" class="avatar-box thumb-xs align-self-center">
                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+2</span>
                            </a>    
                        </div> <!--end img-group-->                   
                    </div><!--end card-body-->
                </div><!--end card-->
                



            </div><!--end col-->
            {{-- @endforeach --}}
 
        </div><!--end row-->


        @endsection