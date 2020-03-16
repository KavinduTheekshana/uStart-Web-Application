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
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body  met-pro-bg">
                        <div class="met-profile">
                            <div class="row">
                                <div class="col-lg-6 align-self-center mb-3 mb-lg-0">
                                    <div class="met-profile-main">
                                        <div class="met-profile-main-pic">
                                            <img src="{{$authprofile->profile_pic}}" alt="" class="rounded-circle"
                                                style="width: 128px">
                                            <span class="fro-profile_main-pic-change">
                                                <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                        <div class="met-profile_user-detail">
                                            <h5 class="met-user-name">{{$authprofile->name}}</h5>
                                            <p class="mb-0 met-user-name-post">Administrator</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4 ml-auto">
                                    <ul class="list-unstyled personal-detail">
                                        <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone
                                            </b> : {{$authprofile->telephone}}</li>
                                        <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b>
                                                Email </b> : {{$authprofile->email}}</li>
                                        <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i>
                                            <b>Location</b> : {{$authprofile->city}}</li>
                                        <li class="mt-2"><i class="dripicons-calendar text-info font-18 mt-2 mr-2"></i>
                                            <b>Birth Date</b> : {{$authprofile->joined_date}}</li>
                                    </ul>

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end f_profile-->
                    </div>
                    <!--end card-body-->
                    <div class="card-body">
                        <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="general_detail_tab" data-toggle="pill"
                                    href="#general_detail">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="settings_detail_tab" data-toggle="pill"
                                    href="#settings_detail">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile_detail_tab" data-toggle="pill"
                                    href="#profile_detail">Profile Picture</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="password_detail_tab" data-toggle="pill"
                                    href="#password_detail">Password</a>
                            </li>
                        </ul>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12">
                <div class="tab-content detail-list" id="pills-tabContent">



                    <div class="tab-pane fade show active" id="general_detail">
                        <div class="row">
                            <div class="col-12">

                                @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif

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



                                <div class="card">
                                    <div class="card-body p-5">

                                        <form class="form-horizontal form-material mb-0">
                                            <div class="form-group row">
                                                <div class="col-md-8">
                                                    <label>Full Name</label>
                                                    <input type="text" value="{{$authprofile->name}}"
                                                        placeholder="Full Name" class="form-control" readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Birth Date</label>
                                                    <input type="text" value="{{$authprofile->joined_date}}"
                                                        placeholder="Joined Date" class="form-control" readonly>
                                                </div>

                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label>Email Address</label>
                                                    <input type="email" value="{{$authprofile->email}}"
                                                        placeholder="Email" class="form-control" name="example-email"
                                                        id="example-email" readonly>
                                                </div>

                                                <div class="col-md-6">
                                                    <label>Telephone</label>
                                                    <input type="text" value="{{$authprofile->telephone}}"
                                                        placeholder="Phone No" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label>Address</label>
                                                    <input type="text" value="{{$authprofile->address}}"
                                                        placeholder="Address" class="form-control" readonly>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Province</label>
                                                    <input type="text" value="{{$authprofile->province}}"
                                                        placeholder="Province" class="form-control" readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>District</label>
                                                    <input type="text" value="{{$authprofile->district}}"
                                                        placeholder="District" class="form-control" readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>City</label>
                                                    <input type="text" value="{{$authprofile->city}}" placeholder="City"
                                                        class="form-control" readonly>
                                                </div>
                                            </div>


                                        </form>


                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end general detail-->










                    <div class="tab-pane fade" id="settings_detail">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-5">

                                        <form class="form-horizontal form-material mb-0" role="form" method="POST"
                                            action="{{action('ProfileController@updateprofile')}}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" value="{{$authprofile->id}}" placeholder="ID"
                                                name="user_id" class="form-control">

                                            <div class="form-group row">
                                                <div class="col-md-8">
                                                    <label style="color: cornflowerblue">Full Name</label>
                                                    <input type="text" value="{{$authprofile->name}}"
                                                        placeholder="Full Name" name="name" class="form-control">
                                                </div>

                                                <div class="col-md-4">
                                                    <label style="color: cornflowerblue">Birth Date</label>
                                                    <input type="date" value="{{$authprofile->joined_date}}"
                                                        placeholder="Birth Date" name="joined_date"
                                                        class="form-control">
                                                </div>

                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label style="color: cornflowerblue">Email Address</label>
                                                    <input type="email" value="{{$authprofile->email}}"
                                                        placeholder="Email" class="form-control" name="example-email"
                                                        id="example-email" disabled>
                                                </div>

                                                <div class="col-md-6">
                                                    <label style="color: cornflowerblue">Telephone</label>
                                                    <input type="text" value="{{$authprofile->telephone}}"
                                                        placeholder="Phone No" name="telephone" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label style="color: cornflowerblue">Address</label>
                                                    <input type="text" value="{{$authprofile->address}}"
                                                        placeholder="Address" name="address" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label style="color: cornflowerblue">Province</label>
                                                    <input type="text" value="{{$authprofile->province}}"
                                                        placeholder="Province" name="province" class="form-control">
                                                </div>

                                                <div class="col-md-4">
                                                    <label style="color: cornflowerblue">District</label>
                                                    <input type="text" value="{{$authprofile->district}}"
                                                        placeholder="District" name="district" class="form-control">
                                                </div>

                                                <div class="col-md-4">
                                                    <label style="color: cornflowerblue">City</label>
                                                    <input type="text" value="{{$authprofile->city}}" placeholder="City"
                                                        name="city" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <button
                                                    class="btn btn-gradient-primary btn-sm text-light px-4 float-right mb-0">Update
                                                    Profile Details</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->














                    <div class="tab-pane fade" id="profile_detail">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-5">

                                        <form class="form-horizontal form-material mb-0" role="form" method="POST"
                                            action="{{action('ProfileController@updateprofilepicture')}}"
                                            enctype="multipart/form-data">
                                            @csrf


                                            <input type="hidden" value="{{$authprofile->id}}" placeholder="ID"
                                                name="user_id" class="form-control">


                                            <div class="form-group row justify-content-center">
                                                <div class="col-md-4">
                                                    <input type="file" id="input-file-now-custom-1" class="dropify"
                                                        data-height="300" data-allowed-file-extensions="pdf png psd jpg"
                                                        data-default-file="{{url($authprofile->profile_pic)}}"
                                                        name="profile_pic" />

                                                    <button
                                                        class="btn btn-gradient-primary btn-sm text-light px-4 mt-3 mb-0 btn-block">Update
                                                        Profile Picture</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->












                    <div class="tab-pane fade" id="password_detail">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-5">

                                        <form class="form-horizontal form-material mb-0" role="form" method="POST"
                                            action="{{action('ProfileController@changePassword')}}"
                                            enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row">

                                                <div class="col-md-4">
                                                    <input type="password" placeholder="Current Password"
                                                        name="current-password" required class="form-control">

                                                    @if ($errors->has('current-password'))
                                                    <span class="help-block text-danger">
                                                        <strong>{{ $errors->first('current-password') }}</strong>
                                                    </span>
                                                    @endif

                                                </div>


                                                <div class="col-md-4">
                                                    <input type="password" placeholder="New password" name="new-password"
                                                        required class="form-control">

                                                    @if ($errors->has('new-password'))
                                                    <span class="help-block text-danger">
                                                        <strong>{{ $errors->first('new-password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="col-md-4">
                                                    <input type="password" placeholder="Confirm"
                                                        name="new-password_confirmation" required class="form-control">
                                                </div>


                                            </div>

                                            <button
                                                class="btn btn-gradient-primary btn-sm text-light px-4 float-right ">Update
                                                Password</button>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->











                </div>
                <!--end settings detail-->














            </div>
            <!--end tab-content-->

        </div>
        <!--end col-->
    </div>
    <!--end row-->

































    @endsection