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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->



        <div class="row">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="mdi mdi-account-multiple text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Users</p>
                                        <h4 class="mt-0 mb-1">{{$userscount}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;"
                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="mdi mdi-account-box text-purple"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Customers</p>
                                        <h4 class="mt-0 mb-1">{{$customerscount}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 100%;"
                                        aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="mdi mdi-checkbox-multiple-blank text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-0 text-muted">Products</p>
                                            <h4 class="mt-0 mb-1 d-inline-block">{{$productscount}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"
                                        aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="mdi mdi-clipboard-text text-pink"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Categories</p>
                                            <h4 class="mt-0 mb-1">{{$categoriescount}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 100%;"
                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->

        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">All Shop Locations</h4>
                        <div>
                            <div id="map" style="height: 50vh"></div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->


        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Latest Products</h4>
                        <div>




                            <table class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Status</th>
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


                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>


                        </div>

                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Latest Categories</h4>
                        <div>

                            <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach($category as $categories)
                                    <tr>
                                        <td>{{$categories->id}}</td>
                                        <td>{{$categories->name}}</td>
                                        <td>
                                            @if($categories->status)
                                            <span class="badge badge-md badge-success">Category is
                                                Active</span>
                                            @else
                                            <span class="badge badge-md badge-danger">Category is
                                                Deactivate</span>
                                            @endif
                                        </td>

                                    </tr>


                                    @endforeach
                                </tbody>
                            </table>




                        </div>


                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 mb-3 header-title">Latest Users</h4>
                        <div>





                            <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Telephone</th>
                                        <th>District</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td><a class="user-avatar mr-2">
                                                <img src="{{$user->profile_pic}}" alt="user"
                                                    class="thumb-sm rounded-circle">
                                            </a></td>
                                        <td>{{$user->name}}</td>

                                        <td>{{$user->telephone}}</td>
                                        <td>{{$user->district}}</td>
                                        <td>
                                            @if($user->status)
                                            <a href="user_diactivate/{{$user->id}}"><span
                                                    class="badge badge-md badge-success">Profile is
                                                    Active</span></a>
                                            @else
                                            <a href="user_activate/{{$user->id}}"><span
                                                    class="badge badge-md badge-danger">Profile is
                                                    Deactivate</span></a>
                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>






                        </div>


                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mt-0 mb-3">Latest Customers</h5>
                        <div>



                            <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Shop</th>
                                    <th>Telephone</th>
                                    <th>District</th>
                                    <th>Status</th>

                                </tr>
                            </thead>


                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td><a class="user-avatar mr-2">
                                            <img src="{{$customer->profile_pic}}" alt="user"
                                                class="thumb-sm rounded-circle">
                                        </a></td>
                                    <td>{{$customer->shop_name}}</td>
                                    <td>{{$customer->telephone}}</td>
                                    <td>{{$customer->district}}</td>
                                    <td>
                                        @if($customer->status)
                                        <a href="customer_diactivate/{{$customer->id}}"><span
                                                class="badge badge-md badge-success">Profile is
                                                Active</span></a>
                                        @else
                                        <a href="customer_activate/{{$customer->id}}"><span
                                                class="badge badge-md badge-danger">Profile is
                                                Deactivate</span></a>
                                        @endif
                                    </td>
                               
                                </tr>
                                @endforeach



                            </tbody>
                        </table>





                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->




        <script>
            function initMap() {
              var myLatLng = {lat: 6.915729, lng: 79.863579};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: myLatLng
              });
              @foreach($customerlocations as $row)
              var marker{{$row->id}} = new google.maps.Marker({
                  position: {
                      lat: {{$row->lat}},
                      lng: {{$row->lng}}
                  },
                  map: map,
                  draggable: false,
                  title: 'Garbage Spot :{{$row->id}} '
              });


              var con{{$row->id}}=  '<div>'+
                                
                '<div><h5>Shop Name : {{$row->shop_name}}</h5></div>'+
                '<div><h6>Separated :</h6></div>'+
                '<div><p>{{$row->address}}</p></div>'+
                             
                                '</div>'



              var infowindow{{$row->id}} = new google.maps.InfoWindow({
            content: con{{$row->id}}
          });


          marker{{$row->id}}.addListener('click', function() {
          infowindow{{$row->id}}.open(map, marker{{$row->id}});
        });
              @endforeach
            }
        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc&libraries=places&callback=initMap"
            async defer></script>



        @endsection