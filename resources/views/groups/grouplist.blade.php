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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Products</a></li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Group List</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                       

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Sels Image</th>
                                    <th>Sels Name</th>
                                    <th>Customer Image</th>
                                    <th>Customer Name</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>

                                @foreach($info as $infos)
                                <tr>
                                    <td>
                                    <img class="rounded-circle" src="{{$infos->selsprofilepic}}" alt="" height="52" width="52"> 
                                    </td>
                                    <td>{{$infos->selsname}}</td>
                                    <td>
                                        <img class="rounded-circle" src="{{$infos->cusprofilepic}}" alt="" height="52" width="52"> 
                                    </td>
                                    <td>{{$infos->cusname}}</td>
                                    <td>{{$infos->cuscity}}</td>
                                    <td>
                                        @if($infos->cusstatus)
                                        <span class="badge badge-md badge-success">Active</span></a>
                                        @else
                                        <span class="badge badge-md badge-danger">Deactivate</span></a>
                                        @endif
                                    </td>
                                  

                                 



                                    <td>
                                    <a href="deletecustomergroup/{{$infos->id}}"><i class="far fa-trash-alt text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach






















                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        @endsection