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

                        <h4 class="mt-0 header-title">Manage Customers Details and Genarate QR Code</h4>
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

                        @if (session('customer_diactivate_status'))
                        <div class="alert alert-outline-danger alert-danger-shadow">
                            {{ session('customer_diactivate_status') }}
                        </div>
                        @endif

                        @if (session('customer_activate_status'))
                        <div class="alert alert-outline-success alert-success-shadow">
                            {{ session('customer_activate_status') }}
                        </div>
                        @endif



                        <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Shop</th>
                                    <th>Telephone</th>
                                    <th>District</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td><a class="user-avatar mr-2">
                                            <img src="{{$customer->profile_pic}}" alt="user"
                                                class="thumb-sm rounded-circle">
                                        </a></td>
                                    <td>{{$customer->name}}</td>
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
                                    <td>
                                        <input type="hidden" modelprofilepic="{{$customer->profile_pic}}"
                                            modelname="{{$customer->name}}" modelshopname="{{$customer->shop_name}}"
                                            modeltelephone="{{$customer->telephone}}" modelemail="{{$customer->email}}"
                                            modeladdress="{{$customer->address}}"
                                            modelprovince="{{$customer->province}}"
                                            modeldistrict="{{$customer->district}}" modelcity="{{$customer->city}}"
                                            id="user{{$customer->id}}">

                                        <button data-toggle="modal" onclick="viewData({{$customer->id}})"
                                            data-animation="bounce" data-target=".bs-example-modal-lg" type="button"
                                            class="btn btn-gradient-purple waves-effect waves-light"><i
                                                class="fa fa-eye" aria-hidden="true"></i></button>
                                        <a href="editcustomer/{{$customer->id}}" type="button"
                                            class="btn btn-gradient-warning waves-effect waves-light"><i
                                                class="fa fa-pen" aria-hidden="true"></i></a>
                                        <a href="deleteuser/{{$customer->id}}" type="button" class="btn btn-gradient-pink waves-effect waves-light"><i
                                                class="fa fa-trash" aria-hidden="true"></i></button>

                                        @if($customer->status)
                                        <a href="customer_diactivate/{{$customer->id}}" type="button"
                                            class="ml-1 btn btn-gradient-danger waves-effect waves-light"><i
                                                class="fa fa-lock" aria-hidden="true"></i></a>
                                        {{-- <a href="user_diactivate/{{$customer->id}}"><span
                                            class="badge badge-md badge-success">Profile is
                                            Active</span></a> --}}
                                        @else
                                        {{-- <a href="user_activate/{{$customer->id}}"><span
                                            class="badge badge-md badge-danger">Profile is
                                            Deactivate</span></a> --}}

                                        <a href="customer_activate/{{$customer->id}}" type="button"
                                            class="ml-1 btn btn-gradient-success waves-effect waves-light"><i
                                                class="fa fa-unlock" aria-hidden="true"></i></button>
                                            @endif
                                            {{-- <button type="button" class="btn btn-gradient-success waves-effect waves-light"><i
                                                class="fa fa-lock" aria-hidden="true"></i></button> --}}
                                            {{-- <button type="button" class="btn btn-purple waves-effect waves-light"><i
                                                class="fa fa-qrcode" aria-hidden="true"></i></button> --}}
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>

                        <!--  Modal content for the above example -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">All Detsils</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <a class="user-avatar mr-2" href="#">
                                                        <img id="modelprofilepic" src="modelprofilepic" alt="user"
                                                            class="thumb-xl rounded-circle">
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" disabled class="form-control" id="modelname">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="PhoneNo">Shop Name</label>
                                                    <input type="text" disabled class="form-control" id="modelshopname">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="Location">Email</label>
                                                    <input type="text" class="form-control" disabled id="modelemail">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="NewOppEmail">Addreass</label>
                                                    <input type="email" disabled class="form-control" id="modeladdress">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Location">Province</label>
                                                    <input type="text" disabled class="form-control" id="modelprovince">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="PhoneNo">District</label>
                                                    <input type="text" disabled class="form-control" id="modeldistrict">
                                                </div>
                                            </div>

                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Location">City</label>
                                                    <input type="text" disabled class="form-control" id="modelcity">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="PhoneNo">Telephone</label>
                                                    <input type="text" disabled class="form-control"
                                                        id="modeltelephone">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->



                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <script>
            function viewData(id){
                // alert($("#user"+id).attr("modelprofilepic"));
                var imageurl = $("#user"+id).attr("modelprofilepic");
                // $("#modelprofilepic").val($("#user"+id).attr("src","modelprofilepic"));
                document.getElementById("modelprofilepic").src= imageurl;
                $("#modelname").val($("#user"+id).attr('modelname'));
                $("#modelshopname").val($("#user"+id).attr('modelshopname'));
                $("#modeltelephone").val($("#user"+id).attr('modeltelephone'));
                $("#modelemail").val($("#user"+id).attr('modelemail'));
                $("#modeladdress").val($("#user"+id).attr('modeladdress'));
                $("#modelprovince").val($("#user"+id).attr('modelprovince'));
                $("#modeldistrict").val($("#user"+id).attr('modeldistrict'));
                $("#modelcity").val($("#user"+id).attr('modelcity'));
            }

        </script>

        @endsection