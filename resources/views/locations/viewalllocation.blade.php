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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Shop Locations</a></li>
                            <li class="breadcrumb-item active">All Locations</li>
                        </ol>
                    </div>
                    <h4 class="page-title">All Locations</h4>
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

                    
                  

                        <div id="map" style="height: 70vh"></div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


        <script>
            function initMap() {
              var myLatLng = {lat: 6.915729, lng: 79.863579};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: myLatLng
              });
              @foreach($customerlocations as $row)
              var marker{{$row->id}} = new google.maps.Marker({
                  position: {
                      lat: {{$row->lat}},
                      lng: {{$row->lng}}
                  },
                  map: map,
                  draggable: false,
                  title: 'Garbage Spot :{{$row->id}} '
              });


              var con{{$row->id}}=  '<div>'+
                                
                '<div><h5>Shop Name : {{$row->shop_name}}</h5></div>'+
                '<div><h6>Separated :</h6></div>'+
                '<div><p>{{$row->address}}</p></div>'+
                             
                                '</div>'



              var infowindow{{$row->id}} = new google.maps.InfoWindow({
            content: con{{$row->id}}
          });


          marker{{$row->id}}.addListener('click', function() {
          infowindow{{$row->id}}.open(map, marker{{$row->id}});
        });
              @endforeach
            }
          </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc&libraries=places&callback=initMap"
            async defer></script>

















        {{-- <script>
    var map;
    function initAutocomplete(){
        console.log(document.getElementById('map'));
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 6.9271, lng: 79.8612},
            zoom: 13
        });
        var marker = new google.maps.Marker({
            position: {
                lat: 6.9271,
                lng: 79.8612
            },
            map: map,
            draggable: true
        });
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        google.maps.event.addListener(searchBox, 'places_changed',function(){
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i=0; place=places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(15);
        });
        google.maps.event.addListener(marker, 'position_changed', function(){
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
        });
    }
</script> --}}


        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc&libraries=places&callback=initAutocomplete"
        async defer></script> --}}






        @endsection