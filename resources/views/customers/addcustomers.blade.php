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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Customers</a></li>
                                        <li class="breadcrumb-item active">Add Customers</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Customers</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Input Customers Details</h4>
                                <br>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label text-right">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label text-right">Shop Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="AKG Stors" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" placeholder="uStart@example.com" id="example-email-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Telephone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="tel" placeholder="0112 152 152" id="example-tel-input">
                                                </div>
                                            </div>
                                
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label text-right">Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="No:25 , Sir James Pieris Mawatha , Colombo" id="example-text-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label text-right">Province</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Western" id="example-text-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">District</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Colombo" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">City</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Maharagama" id="example-text-input">
                                                </div>
                                            </div>
                                    
                               
                                       
                                      
                                            
                                       
                                                                                   
                                        </div>
                                        
                                    </div>  
                                    <div class="row">
                                        <div class="col-sm-12 text-right">
                                            <button type="clear" class="btn btn-gradient-danger px-5 py-2">Cancel</button>
                                            <button type="submit" class="btn btn-gradient-primary px-5 py-2">Submit Customer</button>
                                        </div>
                                    </div>                                                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    @endsection