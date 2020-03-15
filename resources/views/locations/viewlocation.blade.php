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
                            <li class="breadcrumb-item active">View Customers Locations</li>
                        </ol>
                    </div>
                    <h4 class="page-title">View Customers Locations</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        @if (session('user_diactivate_status'))
        <div class="alert alert-outline-danger alert-danger-shadow">
            {{ session('user_diactivate_status') }}
        </div>
        @endif

        @if (session('user_activate_status'))
        <div class="alert alert-outline-success alert-success-shadow">
            {{ session('user_activate_status') }}
        </div>
        @endif


        <div class="row">

            @foreach($customerlocations as $customerlocation)
            <div class="col-lg-6">
                <div class="card client-card">
                    <div class="card-body">
                        <h5>{{$customerlocation->shop_name}}</h5>
                        <h6 style="color: dimgray">{{$customerlocation->address}}</h6>
                        <div style="height: 300px" id="map{{$customerlocation->id}}"></div>


                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->


            @endforeach


        </div>
        <!--end row-->

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                {{ $customerlocations->links() }}
                {{-- <li class="page-item"><a class="page-link" href=""></a></li> --}}


            </ul><!--end pagination-->
        </nav><!--end nav-->

  

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc"async defer></script>
  

    <script>
        // In this example, we center the map, and add a marker, using a LatLng object
        // literal instead of a google.maps.LatLng object. LatLng object literals are
        // a convenient way to add a LatLng coordinate and, in most cases, can be used
        // in place of a google.maps.LatLng object.
        @foreach($customerlocations as $customerlocation)
        var map;


        function initMap{{$customerlocation->id}}() {
          var mapOptions = {
            zoom: 12,
            center: {lat: {{$customerlocation->lat}}, lng: {{$customerlocation->lng}}}
          };
          map = new google.maps.Map(document.getElementById('map{{$customerlocation->id}}'),
              mapOptions);
  
          var marker = new google.maps.Marker({
            // The below line is equivalent to writing:
            // position: new google.maps.LatLng(-34.397, 150.644)
            position: {lat: {{$customerlocation->lat}}, lng: {{$customerlocation->lng}}},
            map: map
          });
  
          // You can use a LatLng literal in place of a google.maps.LatLng object when
          // creating the Marker object. Once the Marker object is instantiated, its
          // position will be available as a google.maps.LatLng object. In this case,
          // we retrieve the marker's position using the
          // google.maps.LatLng.getPosition() method.
          var infowindow = new google.maps.InfoWindow({
            content: '<p>Marker Location:' + marker.getPosition() + '</p>'
          });
  
          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
          });
        }
  
        google.maps.event.addDomListener(window, 'load', initMap{{$customerlocation->id}});
        @endforeach
      </script>

        @endsection