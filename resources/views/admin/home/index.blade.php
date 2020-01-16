
@extends('admin.layouts.app')

@section('title', 'Admin')

@section('sidebar')
   <!--  <p>sidebar</p> -->
@endsection

@section('content')

        <div id="map" class="container" style="
		  width: 100%;
		  height:720px;
		  background-color: #C0C0C0;">          
        </div>
     


		<script src="{{asset('public/sdk/map4dsdk@1.1.0.prod.js')}}"></script>
		<script>
		    let map = new map4d.Map(document.getElementById("map"),
		      {
		        center: [21.007651, 105.828042],
		        zoom: 17,
		        geolocate: true,
		        controls :true,
		        tilt: 0,        
		        accessKey: "98fd21346d83bee24dc734231f7609c9"
		      }
		    )
		    
		    map.setSwitchMode(map4d.SwitchMode.Auto)
		    map.enable3dMode(true)
		    
		</script>


@endsection