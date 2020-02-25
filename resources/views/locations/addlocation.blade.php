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
                            <li class="breadcrumb-item active">Add Locations</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Locations</h4>
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

                        <h4 class="mt-0 header-title">Input Latitude and Longitude or Drag the Pin to add Shop Location
                        </h4>
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

                        <div class="container">

                            <form role="form" method="POST" action="{{action('LocationController@saveshoploaction')}}" enctype="multipart/form-data">
                                @csrf



                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="sr-only">Address</label>
                                            <input type="text" class="form-control" placeholder="Address" name="address" id="pac-input">
                                            <input type="hidden" class="form-control" placeholder="Latitude" id="lat" name="lat"
                                                readonly>
                                            <input type="hidden" class="form-control ml-2" placeholder="Longitude" name="lng"
                                                id="lng" readonly>
                                        </div>
                                    </div>
                          
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="sr-only">City</label>
                                            <select class="select2 form-control mb-3 custom-select" name="customer_id">
                                                <option value="">Select</option>
                                                <optgroup label="Customer (Without Location)">
                                                    @foreach($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                    @endforeach
                                                </optgroup>
                                                
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-gradient-primary ml-2">&nbsp;&nbsp;&nbsp; Save
                                                Location &nbsp;&nbsp;&nbsp;</button>
                                        </div>
                                    </div>
                                </div>

                            </form>






                        </div>
                        <br>

                        {{-- <label id="result"></label> --}}
                        {{-- <div style="height: 500px">{!! Mapper::render() !!}</div> --}}
                        <div id="map" style="height: 500px"></div>





                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


        <script>
            // This sample requires the Places library. Include the libraries=places
            // parameter when you first load the API. For example:
            // <script
            // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    
            function initMap() {
                var map = new google.maps.Map(
                    document.getElementById('map'), {
                        center: {
                            lat: 6.9271,
                            lng: 79.8612
                        },
                        zoom: 15
                    });
    
                var input = document.getElementById('pac-input');
    
                var autocomplete = new google.maps.places.Autocomplete(input);
    
                autocomplete.bindTo('bounds', map);
    
                // Specify just the place data fields that you need.
                autocomplete.setFields(['place_id', 'geometry', 'name', 'formatted_address']);
    
    
                var infowindow = new google.maps.InfoWindow();
                var infowindowContent = document.getElementById('infowindow-content');
                infowindow.setContent(infowindowContent);
    
                var geocoder = new google.maps.Geocoder;
    
                var marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });

                
    
                autocomplete.addListener('place_changed', function() {
                    infowindow.close();
                    var place = autocomplete.getPlace();
    
                    if (!place.place_id) {
                        return;
                    }
                    geocoder.geocode({
                        'placeId': place.place_id
                    }, function(results, status) {
                        if (status !== 'OK') {
                            window.alert('Geocoder failed due to: ' + status);
                            return;
                        }
    
                        map.setZoom(15);
                        map.setCenter(results[0].geometry.location);
    
                        // Set the position of the marker using the place ID and location.
                        marker.setPlace({
                            placeId: place.place_id,
                            location: results[0].geometry.location
                        });
    
                        marker.setVisible(true);
                        var item_lat = place.geometry.location.lat();
                        var item_lng = place.geometry.location.lng();
                        document.getElementById('lat').value = item_lat;
                        document.getElementById('lng').value = item_lng;
    
                        infowindowContent.children['place-name'].textContent = place.name;
                        infowindowContent.children['place-id'].textContent = place.place_id;
                        infowindowContent.children['place-address'].textContent =
                            results[0].formatted_address;
    
                        infowindow.open(map, marker);
                    });
                });
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