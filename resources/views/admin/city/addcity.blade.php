
@extends('admin.layouts.app')

@section('title', 'Add city')

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
<div class="container" style="padding: 0px" >
  <h3>ADD CITY</h3>
  <div class="row" style="margin-bottom: 100px">
     <form  method="POST" action="{{url('admin/city/store')}}" >
            {{ csrf_field() }}
        <div class="col-md-6" >
              <div class="form-group">
                <label for="formGroupExampleInput">Region ID</label>
                <input type="text" class="form-control"   name="region_id" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Phone</label>
                <input type="text" class="form-control"   name="phone">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Website</label>
                <input type="text" class="form-control" name="website">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="text" class="form-control"  name="email" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Title</label>
                <input type="text" class="form-control" name="title" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Description</label>
                <input type="text" class="form-control"  name="description">
              </div>
               <div class="form-group">
                <label for="formGroupExampleInput2">Thumbnail</label>
                <input type="text" class="form-control" name="thumbnail">
              </div>
               <div class="form-group">
                <label for="formGroupExampleInput2">Tags</label>
                <input type="text" class="form-control" name="tags">
              </div>
              <button class="btn btn-primary" type="submit" name="save">SAVE</button>
              <a href="admin"><button class="btn btn-dark" type="button" >NO SAVE </button></a>
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
                <input type="text" class="form-control" name="latitude" id="lat" required>
              </div>
              <div class="col-md-6">
                <label for="formGroupExampleInput2">Longitude</label>
                <input type="text" class="form-control" name="longitude" id="lng" required>
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

                map.addListener("cameraChanging", (args) => {
                if (args.camera && args.camera.target) {
                    $("#lat").val(args.camera.target.lat);
                    $("#lng").val(args.camera.target.lng);
                }
            });
            </script>

@stop