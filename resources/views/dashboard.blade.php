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
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    

                    
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">                                        
                                    <ol class="c-progress-steps">
                                        <li class="c-progress-steps__step  done"><span>Planing</span></li>
                                        <li class="c-progress-steps__step  done"><span>Design</span></li>
                                        <li class="c-progress-steps__step  current"><span>Development</span></li>
                                        <li class="c-progress-steps__step"><span>Testing</span></li>
                                    </ol>
                                </div> <!--end card-body-->                                                                                                     
                            </div><!--end card-->
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-diamond-stone text-warning"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-1 text-muted">Projects</p>
                                                        <h4 class="mt-0 mb-1">35</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
        
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-account-multiple text-purple"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-1 text-muted">Teams</p>
                                                        <h4 class="mt-0 mb-1">12</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
        
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-playlist-check text-success"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-0 text-muted">Tasks</p>
                                                        <h4 class="mt-0 mb-1 d-inline-block">40</h4>
                                                        <span class="badge badge-soft-success mt-1 shadow-none">Active</span>                                                                                                                                     
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
        
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4 col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-coin text-pink"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-sm-8 col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-1 text-muted">Budget</p>
                                                        <h4 class="mt-0 mb-1">$18090</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->                                    
                                </div><!--end col-->
                            </div><!--end row-->                            
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body dash-info-carousel mb-0">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">                                            
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">Project Launch Date</h4>
                                                            <div class="my-3">
                                                               <img src="../assets/images/widgets/p-1.svg" alt="" height="103" class="">
                                                            </div>
                                                            <h2 class="project-title mb-1">Marketech World</h2>
                                                            <p class="mb-1 text-muted"><span class="mr-2 text-secondary font-14"><b>190 Days</b></span> Tuesday, 25 July 2019</p>
                                                        </div>
                                                    </div><!--end col-->                                                        
                                                </div><!--end row-->                                                    
                                            </div><!--end carousel-item-->
                                            <div class="carousel-item">
                                                <div class="row">                                            
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">Project Launch Date</h4>
                                                            <div class="my-3">
                                                                <img src="../assets/images/widgets/p-2.svg" alt="" height="103" class="">
                                                            </div>
                                                            <h2 class="project-title mb-1">Book My World</h2>
                                                            <p class="mb-1 text-muted"><span class="mr-2 text-secondary font-14"><b>130 Days</b></span> Tuesday, 25 July 2019</p>
                                                        </div>
                                                    </div><!--end col-->                                                        
                                                </div><!--end row-->                                                
                                            </div><!--end carousel-item-->

                                            <div class="carousel-item">
                                                <div class="row">                                            
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">Project Launch Date</h4>
                                                            <div class="my-3">
                                                                <img src="../assets/images/widgets/p-3.svg" alt="" height="103" class="">
                                                            </div>
                                                            <h2 class="project-title mb-1">Organic Farming</h2>
                                                            <p class="mb-1 text-muted"><span class="mr-2 text-secondary font-14"><b>100 Days</b></span> Tuesday, 25 July 2019</p>
                                                        </div>
                                                    </div><!--end col-->                                                        
                                                </div><!--end row-->                                              
                                            </div><!--end carousel-item-->
                                            <div class="carousel-item">
                                                <div class="row">                                            
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">Project Launch Date</h4>
                                                            <div class="my-3">
                                                                <img src="../assets/images/widgets/p-4.svg" alt="" height="103" class="">
                                                            </div>
                                                            <h2 class="project-title mb-1">Transfer money</h2>
                                                            <p class="mb-1 text-muted"><span class="mr-2 text-secondary font-14"><b>85 Days</b></span> Tuesday, 25 July 2019</p>
                                                        </div>
                                                    </div><!--end col-->                                                        
                                                </div><!--end row-->                                                
                                            </div><!--end carousel-item-->
                                            
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div><!--end card-body-->                                                                                                        
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Project Budget</h4>                                    
                                    <div id="morris-bar-chart" class="morris-chart project-budget-chart drop-shadow-bar"></div>                                    
                                    <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                        <li class="list-inline-item"><i class="mdi mdi-album text-primary mr-2"></i>Total Budget</li>
                                        <li class="list-inline-item"><i class="mdi mdi-album mr-2 text-success"></i>Amount Used</li>
                                        <li class="list-inline-item"><i class="mdi mdi-album mr-2 text-warning"></i>Target Amount</li>
                                    </ul>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Tasks Performance</h4>
                                    <div class="">
                                        <div id="d2_performance" class="apex-charts"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Projects Workload</h4>
                                    <div class="row">
                                        <div class="col-lg-6">     
                                            <div id="work_load" class="morris-chart workload-chart drop-shadow"></div> 
                                            <ul class="list-unstyled text-center text-muted mb-0">
                                                <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-purple mr-2"></i>External</li>
                                                <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-pink mr-2"></i>Internal</li>
                                                <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-success mr-2"></i>Other</li>
                                            </ul>            
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="table-responsive">
                                                <table class="table mb-0">                                        
                                                    <tbody>
                                                        <tr>
                                                            <td class="border-top-0">
                                                                <img src="../assets/images/widgets/project1.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                                <span class="text-info">Book My World</span>
                                                            </td>
                                                            <td class="border-top-0">
                                                                <small class="float-right text-muted ml-3 font-14">121h</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 55%; border-radius:5px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="../assets/images/widgets/project2.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                                <span class="text-info">Organic Farming</span>
                                                            </td>
                                                            <td>
                                                                <small class="float-right text-muted ml-3 font-14">522h</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 66%; border-radius:5px;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="../assets/images/widgets/project3.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                                <span class="text-info">Marketech World</span>
                                                            </td>
                                                            <td>
                                                                <small class="float-right text-muted ml-3 font-14">245h</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 34%; border-radius:5px;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="../assets/images/widgets/project4.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                                <span class="text-info">Transfer money</span>
                                                            </td>
                                                            <td>
                                                                <small class="float-right text-muted ml-3 font-14">80h</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 28%; border-radius:5px;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> <!--end row-->
                                            </div><!--end table-responsive--> 
                                        </div><!--end col-->
                                    </div><!--end row-->
                                                                                                        
                                </div><!--end card-body-->                                                                                                        
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Tasks List</h4>
                                    <div class="todo-list">                                        
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Icon change in Redesign App</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox" checked=""><span>Add search button Market Research</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Test new features in tablets</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox" checked=""><span>Send IOS App documents</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Connect API to pages</span>
                                                </label>
                                            </div> 
                                        </div>                                                                                               
                                    </div>

                                    <div class="input-group custom-input">   
                                        <input type="text" class="form-control todo-list-input"  placeholder="Add task">
                                        <span class="input-group-append"></span>
                                        <button class="btn btn-gradient-primary add-new-todo-btn">Add</button>                                          
                                    </div>                                       
                                </div><!--end card-body-->                                                                                                        
                            </div><!--end card-->
                        </div><!--end col-->                     
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">                                
                                <div class="card-body">
                                    <h4 class="mt-0 mb-3 header-title">All Projects</h4>           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Project Name</th>
                                                            <th>Client Name</th>
                                                            <th>Start Date</th>
                                                            <th>Deadline</th>
                                                            <th>Status</th>
                                                            <th>Progress</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src="../assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Kevin J. Heal
                                                            </td>
                                                            <td>20/3/2018</td>
                                                            <td>5/5/2018</td>
                                                            <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">92%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>New Office Building</td>
                                                            <td>
                                                                <img src="../assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>11/6/2018</td>
                                                            <td>15/7/2018</td>
                                                            <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-secondary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Website &amp; Blog</td>
                                                            <td>
                                                                <img src="../assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Hyman M. Cross
                                                            </td>
                                                            <td>21/6/2018</td>
                                                            <td>3/7/2018</td>
                                                            <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-secondary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Market Research</td>
                                                            <td>
                                                                <img src="../assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Angelo E. Butler
                                                            </td>
                                                            <td>30/4/2018</td>
                                                            <td>1/6/2018</td>
                                                            <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">78%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-secondary" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Export Marketing</td>
                                                            <td>
                                                                <img src="../assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Robert C. Golding
                                                            </td>
                                                            <td>20/3/2018</td>
                                                            <td>5/5/2018</td>
                                                            <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">45%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-secondary" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src="../assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Kevin J. Heal
                                                            </td>
                                                            <td>14/2/2018</td>
                                                            <td>10/8/2018</td>
                                                            <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">35%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-secondary" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>New Office Building</td>
                                                            <td>
                                                                <img src="../assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>11/6/2018</td>
                                                            <td>15/7/2018</td>
                                                            <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-secondary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Website &amp; Blog</td>
                                                            <td>
                                                                <img src="../assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Phillip T. Morse
                                                            </td>
                                                            <td>8/4/2018</td>
                                                            <td>2/6/2018</td>
                                                            <td><span class="badge badge-md badge-boxed  badge-soft-danger">Complete</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">100%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-pink" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>                                                                                                  
                                                    </tbody>
                                                </table>
                                            </div><!--end table-responsive-->                                            
                                        </div><!--end col-->
                                    </div> <!--end row-->
                                </div><!--end card-body-->                                                                                                        
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h5 class="mt-0 mb-3">Activity</h5>
                                    <div class="slimscroll project-dash-activity">
                                        <div class="activity">
                                            <i class="mdi mdi-check icon-success"></i>
                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted text-right font-10">5 minutes ago</div>
                                                    <h5 class="mt-0">Task finished</h5>
                                                    <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-alert-outline icon-warning"></i>                                                                                                            
                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted text-right font-10">30 minutes ago</div>
                                                    <h5 class="mt-0">Task Overdue</h5>
                                                    <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-code-tags-check icon-pink"></i>    
                                            <div class="time-item ">
                                                <div class="item-info">
                                                    <div class="text-muted text-right font-10">50 minutes ago</div>
                                                    <h5 class="mt-0">Complete code check</h5>
                                                    <p class="text-muted font-13">There are many variations of passages of Lorem Ipsum available.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-comment-outline icon-purple"></i>
                                            <div class="time-item ">
                                                <div class="item-info">
                                                    <div class="text-muted text-right font-10">1 Day ago</div>
                                                    <h5 class="mt-0">New Comment</h5>
                                                    <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <i class="mdi mdi-clock-start icon-secondary"></i>
                                            <div class="time-item">
                                                <div class="item-info">
                                                    <div class="text-muted text-right font-10">5 minutes ago</div>
                                                    <h5 class="my-0">Start New Project</h5>
                                                    <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div>                                                                                                                                           
                                        </div><!--end activity-->
                                    </div><!--end project-dash-activity-->
                                </div><!--end card-body-->                                                                                                        
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    

               
        

            @endsection
       