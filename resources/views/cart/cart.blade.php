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
                            <li class="breadcrumb-item active">Cart</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sels Rep List</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
      
        <!--end row-->












        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">All Sels Reps And You can Get Order Details</h4>
                        <br>

                        @if (session('Categories_diactivate_status'))
                        <div class="alert alert-outline-danger alert-danger-shadow">
                            {{ session('Categories_diactivate_status') }}
                        </div>
                        @endif

                        @if (session('Categories_activate_status'))
                        <div class="alert alert-outline-success alert-success-shadow">
                            {{ session('Categories_activate_status') }}
                        </div>
                        @endif

                        @if (session('statuscategoryupdate'))
                        <div class="alert alert-success">
                            {{ session('statuscategoryupdate') }}
                        </div>
                        @endif


                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Province</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Status</th>
                                <th>Cart</th>
                            </tr>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach($reps as $rep)
                            <tr>
                                <td>{{$rep->id}}</td>
                                <td>
                                    <img class="rounded-circle" src="{{$rep->profile_pic}}" alt="" height="52" width="52">
                                </td>
                                <td>{{$rep->name}}</td>
                                <td>{{$rep->province}}</td>
                                <td>{{$rep->district}}</td>
                                <td>{{$rep->city}}</td>


                                <td>
                                    @if($rep->status)
                                    <span class="badge badge-md badge-success"> Active</span></a>
                                    @else
                                    <span class="badge badge-md badge-danger">Deactivate</span></a>
                                    @endif
                                </td>



                                <td>
                                <a href="cartitem/{{$rep->id}}" type="button" class="btn btn-warning waves-effect waves-light"><i class="fas fa-arrow-circle-right text-light"></i></a>
                                </td>
                            </tr>
                            @endforeach






















                        </tbody>
                    </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->




        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Category Detsils</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form role="form" method="POST" action="{{action('CategoryController@editcategory')}}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="Categorie_id" class="form-control" readonly id="modelid">
                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" id="modelname">
                            </div>
                        </div>

                        

                        



                    </div>

                 
                   
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-gradient-success px-5 py-2">Edit Category</button>
                        </div>
                    </div>

                    </form>
                



                

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->








        @endsection