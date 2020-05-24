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
                                
                                if (jsonObj.statustwo == "Leave") {
                                    td6.innerHTML="<span class='badge badge-md badge-danger'>"+"Leave"+"</span>";
                                } else if (jsonObj.statustwo == "Half Day"){
                                    td6.innerHTML="<span class='badge badge-md badge-warning'>"+"Half Day"+"</span>";
                                }else{
                                    td6.innerHTML="<span class='badge badge-md badge-success'>"+"Full Day"+"</span>";
                                }
                                
                                td7.innerHTML="<a href='' onclick='initMap("+jsonObj.userid+")' id='submitroute' type='button' class='btn btn-gradient-secondary waves-effect waves-light' data-toggle='modal' data-animation='bounce' data-target='.bs-example-modal-center'><i class='fa fa-route' aria-hidden='true'></i></a>";

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
                            tr.innerHTML="<div class='mt-2 mb-2 align-content-center'>No data available in table</div>";
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


        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">


                    <div id="map" style="height: 600px"></div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



     <script>
            function initMap(userid) {
              var directionsService = new google.maps.DirectionsService;
              var directionsRenderer = new google.maps.DirectionsRenderer({
    preserveViewport: true
});

var json_obj = JSON.parse(getPoints('http://127.0.0.1:8000/api/userroute?uid='+userid+'&date='+document.getElementById('example-date-input').value));
console.log(json_obj[0].lng);

              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {lat: json_obj[0].lat, lng: json_obj[0].lng}
              });
              directionsRenderer.setMap(map);
      
         
            //   document.getElementById('submitroute').addEventListener('click', function() {
          calculateAndDisplayRoute(userid,document.getElementById('example-date-input').value,directionsService, directionsRenderer);
        // });
       
            }
      
            function getPoints(yourUrl){
    var Httpreq = new XMLHttpRequest(); // a new request
    Httpreq.open("GET",yourUrl,false);
    Httpreq.send(null);
    return Httpreq.responseText;          
}


            function calculateAndDisplayRoute(userid,date,directionsService, directionsRenderer) {
              
                var json_obj = JSON.parse(getPoints('http://127.0.0.1:8000/api/userroute?uid='+userid+'&date='+date));
        var rest_points = []
        for(i=1; i<json_obj.length-1;i++){
            rest_points.push({
                location: new google.maps.LatLng(json_obj[i].lat, json_obj[i].lng)
            });
        }
        
      
              directionsService.route({
                origin: new google.maps.LatLng(json_obj[0].lat, json_obj[0].lng),
        destination: new google.maps.LatLng(json_obj[json_obj.length -1].lat, json_obj[json_obj.length -1].lng),
        waypoints: rest_points,
                optimizeWaypoints: true,
                travelMode: 'DRIVING'
              }, function(response, status) {
                if (status === 'OK') {
                  directionsRenderer.setDirections(response);
                  var route = response.routes[0];
                  var summaryPanel = document.getElementById('directions-panel');
                  summaryPanel.innerHTML = '';
                  // For each route, display summary information.
                  for (var i = 0; i < route.legs.length; i++) {
                    var routeSegment = i + 1;
                    summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
                        '</b><br>';
                    summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                    summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                    summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
                  }
                } else {
                  window.alert('Directions request failed due to ' + status);
                }
              });
            }

           
        </script> 








       {{-- <script>
            var x,y,z;
    
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 3,
        center: {lat: 5.9549, lng: 80.5550},
        mapTypeId: 'terrain'
      });

        
      var directionsService = new google.maps.DirectionsService;
      var directionsRenderer = new google.maps.DirectionsRenderer({
        draggable: false,
        map: map,
        panel: document.getElementById('right-panel')
      });

      directionsRenderer.addListener('directions_changed', function() {
        computeTotalDistance(directionsRenderer.getDirections());
      });

      displayRoute( directionsService,directionsRenderer);
    }

    function getPoints(yourUrl){
    var Httpreq = new XMLHttpRequest(); // a new request
    Httpreq.open("GET",yourUrl,false);
    Httpreq.send(null);
    return Httpreq.responseText;          
}

    function displayRoute(service, display) {

        var json_obj = JSON.parse(getPoints('http://127.0.0.1:8000/api/latlng'));
        var rest_points = []
        for(i=1; i<json_obj.length-2;i++){
            rest_points.push({
                location: new google.maps.LatLng(json_obj[i].lat, json_obj[i].lng)
            });
        }
      service.route({
        origin: new google.maps.LatLng(json_obj[0].lat, json_obj[0].lng),
        destination: new google.maps.LatLng(json_obj[json_obj.length -1].lat, json_obj[json_obj.length -1].lng),
        waypoints: rest_points,
        travelMode: 'DRIVING',
        avoidTolls: true
      }, function(response, status) {
        if (status === 'OK') {
          display.setDirections(response);
        } else {
          alert('Could not display directions due to: ' + status);
        }
      });
    }

    function computeTotalDistance(result) {
      var total = 0;
      var myroute = result.routes[0];
      for (var i = 0; i < myroute.legs.length; i++) {
        total += myroute.legs[i].distance.value;
      }
      total = total / 1000;
      alert = total + ' km';
    }
        </script>  --}}



        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc&libraries=places"
            async defer></script>




        @endsection