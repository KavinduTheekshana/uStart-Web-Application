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
                            <li class="breadcrumb-item active">Daily Attendence</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Daily Attendence View</h4>
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

                        <div class="row ml-2">
                            <h4 class="mt-2 header-title">Select the Date What Do you want to Search
                                &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                            <p class="mt-0 text-muted "><input class="form-control" onchange="changeDate()" type="date"
                                    id="example-date-input"></p>
                        </div>




                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
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
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



        <script>

            getData("");

            function changeDate(){
                getData(document.getElementById('example-date-input').value);
            }

            function getData(date){
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
                                
                                td1.innerHTML=jsonObj.id;
                                td2.innerHTML=jsonObj.name;
                                td3.innerHTML=jsonObj.intime;
                                td4.innerHTML=jsonObj.outtime;
                                td5.innerHTML=jsonObj.duration;
                                
                                td6.innerHTML="<span class='badge badge-md badge-success'>"+jsonObj.duration+"</span>";
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

                xhttp.open("POST", "attendencejs", false);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("_token={{ csrf_token() }}&date="+date);
            }
        </script>




        @endsection