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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                                        <li class="breadcrumb-item active">Add Users</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Users</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                
                                <form role="form" method="POST" action="{{action('UsersController@adduser')}}" enctype="multipart/form-data">
                                    @csrf 
                                
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Input Seller Rep Details</h4>
                                <br>
                                    


                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </div>
                                @endif

                                @if (session('status'))
                                    <div class="alert alert-success">
                                    {{ session('status') }}
                                    </div>
                                @endif



                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label text-right">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" placeholder="Artisanal kale" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" name="email" placeholder="uStart@example.com" id="example-email-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Telephone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="tel" name="telephone" placeholder="0112 152 152" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label text-right">Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="password" id="example-password-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label text-right">Password Confirm</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="password_confirmation"  id="example-password-input">
                                                </div>
                                            </div>
                                

                                        
                                            
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label text-right">Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="address" placeholder="No:25 , Sir James Pieris Mawatha , Colombo" id="example-text-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label text-right">Province</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="province" placeholder="Western" id="example-text-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">District</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="district" placeholder="Colombo" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">City</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="city" placeholder="Maharagama" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Joined Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date" name="joined_date" placeholder="2018-10-25" id="example-date-input">
                                                </div>
                                            </div>
                               
                                       
                                      
                                            
                                       
                                                                                   
                                        </div>
                                        
                                    </div>  
                                    <div class="row">
                                        <div class="col-sm-12 text-right">
                                            <button type="button" class="btn btn-gradient-danger px-5 py-2">Cancel</button>
                                            <button type="submit" class="btn btn-gradient-primary px-5 py-2">Submit User</button>
                                        </div>
                                    </div>  
                                                                                                
                                </div><!--end card-body-->
                            </form>  
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    @endsection