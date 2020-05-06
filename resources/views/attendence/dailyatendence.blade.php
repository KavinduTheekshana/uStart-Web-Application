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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Attendence</a></li>
                            <li class="breadcrumb-item active">Daily Attendence</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Daily Attendence View</h4>
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

                        <div class="row ml-2">
                            <h4 class="mt-2 header-title">Select the Date What Do you want to Search
                                &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                            <p class="mt-0 text-muted "><input class="form-control" type="date" value="2011-08-19"
                                    id="example-date-input"></p>
                        </div>




                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>In TIme</th>
                                    <th>Out Time</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Route</th>
                                </tr>
                            </thead>


                            <tbody>


                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>17:30:00</td>
                                    <td>17:30:00</td>
                                    <td>00:00:00</td>
                                    <td><span class="badge badge-md badge-success">Full Day</span></td>
                                    <td>
                                        <a href="" type="button"
                                            class="btn btn-gradient-secondary  waves-effect waves-light"><i
                                                class="fa fa-route" aria-hidden="true"></i></a>
                                    </td>
                                </tr>


                                <tr>
                                    <td>2</td>
                                    <td>Tiger Nixont</td>
                                    <td>17:30:00</td>
                                    <td>17:30:00</td>
                                    <td>00:00:00</td>
                                    <td><span
                                        class="badge badge-md badge-danger">Leave</span></td>
                                        <td>
                                            <a href="" type="button"
                                                class="btn btn-gradient-secondary  waves-effect waves-light"><i
                                                    class="fa fa-route" aria-hidden="true"></i></a>
                                        </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Tiger Nixont</td>
                                    <td>17:30:00</td>
                                    <td>17:30:00</td>
                                    <td>00:00:00</td>
                                    <td><span
                                        class="badge badge-md badge-warning">Half Day</span></td>
                                        <td>
                                            <a href="" type="button"
                                                class="btn btn-gradient-secondary  waves-effect waves-light"><i
                                                    class="fa fa-route" aria-hidden="true"></i></a>
                                        </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->








        @endsection