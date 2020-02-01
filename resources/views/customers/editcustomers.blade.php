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
                            <li class="breadcrumb-item active">Edit Customers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Customers</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form role="form" method="POST" action="{{action('CustomerController@updatecustomer')}}" enctype="multipart/form-data">
                        @csrf 

                        <input type="hidden" name="user_id" value="{{$customers->id}}">

                        
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Edit Customers Details</h4>
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
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label text-right">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{$customers->name}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Shop
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="shop_name" value="{{$customers->shop_name}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input"
                                        class="col-sm-2 col-form-label text-right">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" name="email"
                                            value="{{$customers->email}}" id="example-email-input" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input"
                                        class="col-sm-2 col-form-label text-right">Telephone</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" name="telephone"
                                            value="{{$customers->telephone}}" id="example-tel-input">
                                    </div>
                                </div>

                                

                            </div>


                            <div class="col-lg-6">

                                <div class="form-group row">
                                    <label for="example-search-input"
                                        class="col-sm-2 col-form-label text-right">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="address"
                                            value="{{$customers->address}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                               


                                <div class="form-group row">
                                    <label for="example-url-input"
                                        class="col-sm-2 col-form-label text-right">Province</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="province" value="{{$customers->province}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input"
                                        class="col-sm-2 col-form-label text-right">District</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="district" value="{{$customers->district}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input"
                                        class="col-sm-2 col-form-label text-right">City</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="city" value="{{$customers->city}}"
                                            id="example-text-input">
                                    </div>
                                </div>







                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-gradient-primary px-5 py-2">Edit
                                    Customer</button>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </form>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        @endsection