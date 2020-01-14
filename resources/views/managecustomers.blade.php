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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Customers</a></li>
                            <li class="breadcrumb-item active">Manage</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Coustomers</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Manage Customers Details and Genarate QR Code</h4>
               <br>

                <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shop</th>
                        <th>Telephone</th>
                        <th>District</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>AKG Stors</td>
                        <td>0112 152 152</td>
                        <td>Colombo</td>
                        <td>
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-warning waves-effect waves-light"><i class="fa fa-pen" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-purple waves-effect waves-light"><i class="fa fa-qrcode" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    
                   
               
                    </tbody>
                </table>        
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection