
@extends('admin.layouts.app')

@section('title', 'Edit City')

@section('sidebar')
   <!--  <p>sidebar</p> -->
@endsection

@section('content')
<style type="text/css">
  img.marker-location {
    position: absolute;
    width: 32px;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: calc(50% - 32px);
    transform: translateY(-50%);
    z-index: 999;
}

</style>

<h2></h2>
<div class="container" style="padding: 0px" >
  <h3>Edit City</h3>
  <div class="row" style="margin-bottom: 100px">

     <form  method="post" action="{{url('admin/city/update/' . $getid->id)}}" >
      {{ csrf_field() }}
        <div class="col-md-6" >
              <div class="form-group">
                <label for="formGroupExampleInput">Region ID</label>
                <input type="text" class="form-control"   name="region_id" value="{{$getid->region_id}}">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Phone</label>
                <input type="text" class="form-control"   name="phone" value="{{$getid->phone}}">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Website</label>
                <input type="text" class="form-control" name="website" value="{{$getid->website}}">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="text" class="form-control"  name="email" value="{{$getid->email}}">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Title</label>
                <input type="text" class="form-control" name="title" value="{{$til}}">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Description</label>
                <input type="text" class="form-control" name="description" value="{{$des}}">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Tags</label>
                <input type="text" class="form-control"  name="tags" value="{{$tags}}" >
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Thumbnail</label>
                <input type="text" class="form-control"  name="thumbnail" value="{{$getid->thumbnail}}" >
              </div>
              <button class="btn btn-primary" type="submit" name="save">Change</button>
              <a href="admin/city"><button class="btn btn-dark" type="nosave" name="save">No Change</button></a>
        </div>

        <div class="col-md-6" >
            <div class="idmap">
                <label for="formGroupExampleInput2">Map</label>
                <div id="map" class="container" style="width: 100%;height:493px;">
             
                </div>
                <img id="maker" class="marker-location" src="http://lists.nhavadat.asia/public/images/location.png">
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="formGroupExampleInput2">Latitude</label>
                <input type="text" class="form-control" name="latitude" id="lat" value="{{$getid->latitude}}">
              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput2">Longitude</label>
                <input type="text" class="form-control" name="longitude" id="lng"  value="{{$getid->longitude}}">
              </div>
            </div>
        
        </div>
  
    </form>
  </div><!--  row -->
</div> <!-- container -->

@endsection

@section('scripts')

<script src="{{asset('public/sdk/map4dsdk@1.1.0.prod.js')}}"></script>
            <script>
                let map = new map4d.Map(document.getElementById("map"),
                  {
                    center: [<?php echo $getid['latitude'];?>, <?php echo $getid['longitude'];?>],
                    zoom: 17,
                    geolocate: true,
                    controls :true,
                    tilt: 0,        
                    accessKey: "98fd21346d83bee24dc734231f7609c9"
                  }
                )
                map.setSwitchMode(map4d.SwitchMode.Auto)
                map.enable3dMode(true)

                map.addListener("cameraChanging", (args) => {
                if (args.camera && args.camera.target) {
                    $("#lat").val(args.camera.target.lat);
                    $("#lng").val(args.camera.target.lng);
                }
            });
            </script>

@stop