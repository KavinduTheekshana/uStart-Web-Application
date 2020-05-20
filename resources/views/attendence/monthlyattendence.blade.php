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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Attendence</a></li>
                            <li class="breadcrumb-item active">Monthly Attendence</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Monthly Attendence View</h4>
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

                        <h4 class="mt-0 header-title">Select Year, Month and User to get Monthly Attendence
                        </h4>
                        <div class="row">
                            <div class="col-md-3">
                                <select onchange="changeDate()" id="year" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                    <option>Select Year</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                </select>
                            </div>   

                            <div class="col-md-3">
                                <select onchange="changeDate()" id="month" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                    <option>Select Month</option>
                                        <option value="1">January</option>
                                        <option value="2">Febarary</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">Auguest</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                </select>
                            </div>  


                            <div class="col-md-3">
                                <select onchange="changeDate()" id="user" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                    <option>Select User</option>

                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach

                                </select>
                            </div> 

                        </div>

                        

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

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>In TIme</th>
                                <th>Out Time</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Route</th>
                            </tr>
                        </thead>


                        <tbody id="tcontent">

                        </tbody>
                    </table>
                        <br>






                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->






        <script>

            getData("");

            function changeDate(){
                getData(document.getElementById('year').value,document.getElementById('month').value,document.getElementById('user').value);
            }

            function getData(year,month,user){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var arrayObj=JSON.parse(this.responseText);
                        
                        document.getElementById("tcontent").innerHTML="";
                        if(arrayObj.length>0){
                            for(var i=0;i<arrayObj.length;i++){
                                var tr=document.createElement("tr");

                                var jsonObj=arrayObj[i];

                                var td1=document.createElement("td");
                                var td2=document.createElement("td");
                                var td3=document.createElement("td");
                                var td4=document.createElement("td");
                                var td5=document.createElement("td");
                                var td6=document.createElement("td");
                                var td7=document.createElement("td");
                                
                                

                                td1.innerHTML=jsonObj.date;
                                td2.innerHTML=jsonObj.name;
                                td3.innerHTML=jsonObj.intime;
                                td4.innerHTML=jsonObj.outtime;
                                td5.innerHTML=jsonObj.duration;
                                
                                if (jsonObj.statustwo == "Leave") {
                                    td6.innerHTML="<span class='badge badge-md badge-danger'>"+"Leave"+"</span>";
                                } else if (jsonObj.statustwo == "Half Day"){
                                    td6.innerHTML="<span class='badge badge-md badge-warning'>"+"Half Day"+"</span>";
                                }else{
                                    td6.innerHTML="<span class='badge badge-md badge-success'>"+"Full Day"+"</span>";
                                }
                                td7.innerHTML="<a href='' type='button' class='btn btn-gradient-secondary  waves-effect waves-light'><i class='fa fa-route' aria-hidden='true'></i></a>";

                                 tr.appendChild(td1); 
                                 tr.appendChild(td2); 
                                 tr.appendChild(td3); 
                                 tr.appendChild(td4); 
                                 tr.appendChild(td5); 
                                 tr.appendChild(td6); 
                                 tr.appendChild(td7); 
                                 document.getElementById("tcontent").appendChild(tr);
                            }
                        }else{
                            var tr=document.createElement("tr");
                            var td=document.createElement("td");
                            td.setAttribute("colspan","7");
                            tr.innerHTML="No data available in table";
                            tr.appendChild(td);
                            document.getElementById("tcontent").appendChild(tr);
                        }
                        
                    }
                };

                xhttp.open("POST", "monthlyattendencejs", false);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("_token={{ csrf_token() }}&year="+year+"&month="+month+"&user="+user);
            }
        </script>


        @endsection