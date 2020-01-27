@extends('layouts.home')

@section('content')


<div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">uStart</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                                        <li class="breadcrumb-item active">Category</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Category</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Input Category Details</h4>
                                <br>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label text-right">Category Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                             
                                            
                                       
                                            <div class="col-sm-12 text-left">
                                                <button type="clear" class="btn btn-gradient-danger px-5 py-2">Cancel</button>
                                                <button type="submit" class="btn btn-gradient-primary px-5 py-2">Submit Category</button>
                                            </div>
                                    
                               
                                       
                                      
                                            
                                       
                                                                                   
                                        </div>
                                        
                                    </div>  
                                                                                       
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->







                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                
                                <h4 class="page-title">Manage Category</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->




                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="mt-0 header-title">Manage Category Details</h4>
                                   <br>
                    
                                    <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                    
                    
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tiger Nixon</td>

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