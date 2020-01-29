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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                            <li class="breadcrumb-item active">Manage Users</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Users</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif


        <div class="row">
            @foreach($users as $user)
            <div class="col-lg-3">
                <div class="card client-card">
                    <div class="card-body text-center">
                        <img src="{{$user->profile_pic}}" alt="user" class="rounded-circle thumb-xl">
                        <h5 class=" client-name">{{$user->name}}</h5>
                        @if($user->status)
                        <a href="user_diactivate/{{$user->id}}"><span class="badge badge-md badge-success">Profile is Active</span></a>
                        @else
                        <a href="user_activate/{{$user->id}}"><span class="badge badge-md badge-danger">Profile is Deactivate</span></a>
                        @endif
                        <br>
                        <br>
                        <span class="text-muted mr-3"><i
                                class="dripicons-location mr-2 text-info"></i>{{$user->city}}</span>
                        <br>
                        <span class="text-muted"><i
                                class="dripicons-phone mr-2 text-info"></i>{{$user->telephone}}</span>
                        <br>
                        <span class="text-muted"><i
                                class="dripicons-calendar mr-2 text-info"></i>{{$user->joined_date}}</span>

                        <br><br>
                        <button type="button" class="view btn btn-sm btn-gradient-pink" data-toggle="modal"
                            onclick="viewData({{$user->id}})" data-animation="bounce" data-target=".bs-example-modal-lg"
                            data-modelname="{{$user->name}}"> &nbsp; &nbsp; View &nbsp; &nbsp; </button>


                        <input type="hidden" modelprofilepic="{{$user->profile_pic}}" modelname="{{$user->name}}"
                            modeltelephone="{{$user->telephone}}" modelemail="{{$user->email}}"
                            modeladdress="{{$user->address}}" modelprovince="{{$user->province}}"
                            modeldistrict="{{$user->district}}" modelcity="{{$user->city}}"
                            modeljoineddate="{{$user->joined_date}}" id="user{{$user->id}}">


                        <a href="edituser/{{$user->id}}" type="button" class="btn btn-sm btn-gradient-primary">&nbsp;
                            &nbsp; Edit &nbsp; &nbsp; </a>
                        <button type="button" class="btn btn-sm btn-gradient-warning">Message</button>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            @endforeach
        </div>
        <!--end row-->

        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">All Detsils</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
                                    <label for="PhoneNo">Telephone</label>
                                    <input type="text" disabled class="form-control" id="modeltelephone">
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
                                    <label for="PhoneNo">Joined Date</label>
                                    <input type="text" disabled class="form-control" id="modeljoineddate">
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <script>
            function viewData(id){
                // alert($("#user"+id).attr("modelprofilepic"));
                var imageurl = $("#user"+id).attr("modelprofilepic");
                // $("#modelprofilepic").val($("#user"+id).attr("src","modelprofilepic"));
                document.getElementById("modelprofilepic").src= imageurl;
                $("#modelname").val($("#user"+id).attr('modelname'));
                $("#modeltelephone").val($("#user"+id).attr('modeltelephone'));
                $("#modelemail").val($("#user"+id).attr('modelemail'));
                $("#modeladdress").val($("#user"+id).attr('modeladdress'));
                $("#modelprovince").val($("#user"+id).attr('modelprovince'));
                $("#modeldistrict").val($("#user"+id).attr('modeldistrict'));
                $("#modelcity").val($("#user"+id).attr('modelcity'));
                $("#modeljoineddate").val($("#user"+id).attr('modeljoineddate'));
            }

        </script>


        {{-- <script>
            $('.view').on('click', function (e) {
                e.preventDefault();
                document.getElementById('modelname').value = $(this).data('modelname');
                
            });
        </script> --}}




        @endsection