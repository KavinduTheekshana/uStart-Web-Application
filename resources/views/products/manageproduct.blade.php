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
                    <h4 class="page-title">Product List</h4>
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

                        <h4 class="mt-0 header-title">Product Stock</h4>
                        <p class="text-muted mb-4 font-13">
                            Available all products.
                        </p>
                        <br>

                        @if (session('user_diactivate_status'))
                        <div class="alert alert-outline-danger alert-danger-shadow">
                            {{ session('user_diactivate_status') }}
                        </div>
                        @endif


                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>

                                @foreach($products as $product)
                                <tr>
                                    <td>
                                        <img src="{{$product->product_image}}" alt="" height="52">
                                        <p class="d-inline-block align-middle mb-0">
                                            <a
                                                class="d-inline-block align-middle mb-0 product-name">{{$product->name}}</a>
                                            <br>
                                            {{-- <span class="text-muted font-13">Size-05 (Model 2019)</span> --}}
                                        </p>
                                    </td>
                                    <td>Sports</td>
                                    <td>Rs : {{$product->product_price}} .00</td>


                                    <td>
                                        @if($product->status)
                                        <span class="badge badge-md badge-success">Product is
                                            Active</span></a>
                                        @else
                                        <span class="badge badge-md badge-danger">Product is
                                            Deactivate</span></a>
                                        @endif
                                    </td>



                                    <td>
                                        <a href="product_delete/{{$product->id}}"><i class="far fa-trash-alt text-danger"></i></a>
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