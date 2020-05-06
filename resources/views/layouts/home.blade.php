<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>uStart - Automated Customer Tracking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="../assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert -->
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">


    <link href="../assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">

</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="dashboard" class="logo">
                <span>
                    <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="../assets/images/logo.png" alt="logo-large" class="logo-lg  logo-light">
                    <img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                </span>
            </a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">


             
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset($authprofile->profile_pic)}}" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">{{$authprofile->name}}<i
                                class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile"><i class="dripicons-user text-muted mr-2"></i>
                            Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="button-menu-mobile nav-link waves-effect waves-light">
                        <i class="dripicons-menu nav-icon"></i>
                    </button>
                </li>
                <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fas fa-search"></i></a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->

    <div class="page-wrapper">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu">

                <li>
                    <a href="{{ url('dashboard') }}"><i class="ti-layout-grid2"></i><span>Dashboard</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="ti-user"></i><span>Users</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ url('addusers') }}"><i
                                    class="ti-control-record"></i>Add Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('manageusers') }}"><i
                                    class="ti-control-record"></i>Manage Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('userslist') }}"><i
                                    class="ti-control-record"></i>Users List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="ti-face-smile"></i><span>Customers</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ url('addcustomers') }}"><i
                                    class="ti-control-record"></i>Add Customers</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('managecustomers') }}"><i
                                    class="ti-control-record"></i>Manage</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="ti-shopping-cart-full"></i><span>Products</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ url('addproduct') }}"><i
                                    class="ti-control-record"></i>Add Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('manageproduct') }}"><i
                                    class="ti-control-record"></i>Products List</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{ url('category') }}"><i class="ti-layers-alt"></i><span>Category</span></a>
                </li>


                <li>
                    <a href="javascript: void(0);"><i class="ti-map-alt"></i><span>Shop Locations</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ url('addlocation') }}"><i
                                    class="ti-control-record"></i>Add Locations</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('viewlocation') }}"><i
                                    class="ti-control-record"></i>Locations List</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('viewalllocation') }}"><i
                                    class="ti-control-record"></i>All Locations</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="dripicons-user-group"></i><span>Groups</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ url('creategroup') }}"><i
                                    class="ti-control-record"></i>Create Group</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('managegroup') }}"><i
                                    class="ti-control-record"></i>Manage Groups</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('grouplist') }}"><i
                                    class="ti-control-record"></i>Groups List</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);"><i class="far fa-address-card"></i><span>Attendence</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ url('dailyatendence') }}"><i
                                    class="ti-control-record"></i>Daily</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('monthlyattendence') }}"><i
                                    class="ti-control-record"></i>Monthly</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('cart') }}"><i class="ti-shopping-cart-full"></i><span>Cart</span></a>
                </li>

        

                {{-- <li>
                        <a href="javascript: void(0);"><i class="ti-layers-alt"></i><span>Category</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="addcategory"><i class="ti-control-record"></i>Add Category</a></li>
                            <li class="nav-item"><a class="nav-link" href="managecategory"><i class="ti-control-record"></i>Category List</a></li>
                        </ul>
                    </li> --}}







            </ul>
        </div>
        <!-- end left-sidenav-->


        @yield('content')

    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; 2020 uStart <span class="text-muted d-none d-sm-inline-block float-right">Developed by CreatX
            Software</span>
    </footer>
    <!--end footer-->
    </div>
    <!-- end page content -->



    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/waves.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>

    <!--Plugins-->
    <script src="../assets/plugins/morris/morris.min.js"></script>
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>


    <script src="../assets/pages/jquery.projects_dashboard.init.js"></script>


    <!-- App js -->
    <script src="../assets/js/app.js"></script>

    <!-- Required datatable js -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables/jszip.min.js"></script>
    <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../assets/pages/jquery.datatable.init.js"></script>

    <!-- Sweet-Alert  -->
    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="../assets/pages/jquery.sweet-alert.init.js"></script>


    <script src="../assets/plugins/dropify/js/dropify.min.js"></script>
    <script src="../assets/pages/jquery.form-upload.init.js"></script>



    <!--Wysiwig js-->
    <script src="../assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="../assets/pages/jquery.form-editor.init.js"></script>


</body>

</html>