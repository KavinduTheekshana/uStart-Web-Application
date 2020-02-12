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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Category</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <form role="form" method="POST" action="{{action('CategoryController@addcategory')}}"
                        enctype="multipart/form-data">
                        @csrf


                        <div class="card-body">
                            <h4 class="mt-0 header-title">Input Category Details</h4>
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
                                            class="col-sm-2 col-form-label text-right">Category Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Product Group Name" id="example-text-input">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">



                                    <div class="col-sm-12 text-left">
                                        <button type="reset" class="btn btn-gradient-danger px-5 py-2">Reset</button>
                                        <button type="submit" class="btn btn-gradient-primary px-5 py-2">Submit
                                            Category</button>
                                    </div>








                                </div>

                            </div>

                        </div>
                        <!--end card-body-->
                    </form>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->







        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">Manage Category</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Manage Category Details</h4>
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


                        <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($category as $categories)
                                <tr>
                                    <td>{{$categories->id}}</td>
                                    <td>{{$categories->name}}</td>
                                    <td>
                                        @if($categories->status)
                                        <span
                                                class="badge badge-md badge-success">Category is
                                                Active</span>
                                        @else
                                        <span
                                                class="badge badge-md badge-danger">Category is
                                                Deactivate</span>
                                        @endif
                                    </td>modelid
                                    <td>
                                        <input type="hidden" modelname="{{$categories->name}}" modelid="{{$categories->id}}" id="category{{$categories->id}}">

                                        <button data-toggle="modal" onclick="viewData({{$categories->id}})"
                                            data-animation="bounce" data-target=".bs-example-modal-lg" type="button" class="btn btn-warning waves-effect waves-light"><i
                                                class="fa fa-pen" aria-hidden="true"></i></button>
                                                @if($categories->status)
                                                <a href="category_diactivate/{{$categories->id}}" type="button" class="btn btn-gradient-danger waves-effect waves-light"><i
                                                    class="fa fa-lock" aria-hidden="true"></i></a>
                                                {{-- <a href="user_diactivate/{{$customer->id}}"><span class="badge badge-md badge-success">Profile is
                                                        Active</span></a> --}}
                                                @else
                                                {{-- <a href="user_activate/{{$customer->id}}"><span class="badge badge-md badge-danger">Profile is
                                                        Deactivate</span></a> --}}

                                                        <a href="category_activate/{{$categories->id}}" type="button" class="btn btn-gradient-success waves-effect waves-light"><i
                                                            class="fa fa-unlock" aria-hidden="true"></i></button>
                                                @endif
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





    <script>
        function viewData(id){
            $("#modelname").val($("#category"+id).attr('modelname'));
            $("#modelid").val($("#category"+id).attr('modelid'));

        }

    </script>



        @endsection