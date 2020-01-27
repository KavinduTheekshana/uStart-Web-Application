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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Products</a></li>
                            <li class="breadcrumb-item active">Add Products</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Products</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Input Products Details</h4>
                        <br>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Product
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Artisanal kale"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label text-right">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Number
                                        of Pcs</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" placeholder="1500"
                                            id="example-email-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input"
                                        class="col-sm-2 col-form-label text-right">Price</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" placeholder="2300"
                                            id="example-text-input">
                                    </div>
                                </div>


                            </div>


                            <div class="col-lg-6">

                                <div class="form-group row">
                                    <label for="example-url-input"
                                        class="col-sm-2 col-form-label text-right">Image</label>
                                    <div class="col-sm-10 custom-file">
                                        <input type="file" id="input-file-now" class="dropify" />
                                    </div>
                                </div>









                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="clear" class="btn btn-gradient-danger px-5 py-2">Cancel</button>
                                <button type="submit" class="btn btn-gradient-primary px-5 py-2">Submit
                                    Products</button>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->




        @endsection