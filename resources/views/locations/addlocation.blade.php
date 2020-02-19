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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Shop Locations</a></li>
                            <li class="breadcrumb-item active">Add Locations</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Locations</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!-- end page title end breadcrumb -->



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Input Latitude and Longitude or Drag the Pin to add Shop Location</h4>
                        <br>

                        <div class="container">
                            
                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="sr-only">Latitude</label>
                                    <input type="text" class="form-control" placeholder="Latitude">
                                </div>                                                    
                                <div class="form-group m-l-10">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="text" class="form-control ml-2" placeholder="Longitude">
                                </div>
                                <button type="submit" class="btn btn-gradient-primary ml-2">&nbsp;&nbsp;&nbsp; Save Location &nbsp;&nbsp;&nbsp;</button>
                            </form> 


                        </div>
                        <br>



                        <div id="gmaps-markers" class="gmaps" style="height: 500px"></div>
                   

                      



                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



        @endsection