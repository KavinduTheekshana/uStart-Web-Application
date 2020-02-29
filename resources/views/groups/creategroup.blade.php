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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Groups</a></li>
                            <li class="breadcrumb-item active">Create Group</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Create Coustomers Group</h4>
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
                        

                        <form>
                       
                                <h4 class="mt-0 header-title">Create Coustomers Group</h4>

                                <div class="row">
                             <div class="col-md-6">
                            <div class="form-group">
                                <label class="sr-only">City</label>
                                <select class="select2 form-control mb-3 custom-select" name="customer_id">
                                    <option value="">Users</option>
                                    <optgroup label="Customer (City)">
                                        @foreach($customers as $customer)
                                    <option value="{{$customer->id}}">{{$customer->name}} &nbsp; ({{$customer->city}})</option>
                                        @endforeach
                                    </optgroup>
                                    
                                </select>

                            </div>
                        </div>



                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="submit" name="bulk_delete" id="bulk_delete"
                                    class="btn btn-gradient-primary ml-2">&nbsp;&nbsp;&nbsp; Create Group &nbsp;&nbsp;&nbsp;</button>
                            </div>
                        </div>

                    </div>
                        


                        
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Customers List (You Can Select Multipal Coustomers)</h4>
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



                        <table id="student_table" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Mark</th>
                                    <th>ID</th>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Shop</th>
                                    <th>Telephone</th>
                                    <th>Province</th>
                                    <th>District</th>
                                    <th>City</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($customers as $customer)
                                
                                <tr>
                                    <td>{{$customer->id}}</td>
                                    <td>
                                        <input type="checkbox">
                                    </td>


                                    <td><a class="user-avatar mr-2">
                                            <img src="{{$customer->profile_pic}}" alt="user"
                                                class="thumb-sm rounded-circle">
                                        </a></td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->shop_name}}</td>
                                    <td>{{$customer->telephone}}</td>
                                    <td>{{$customer->province}}</td>
                                    <td>{{$customer->district}}</td>
                                    <td>{{$customer->city}}</td>

                          
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </form>
                        












                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        

       




        

        @endsection