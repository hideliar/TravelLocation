
@extends('admin.layouts.app')

@section('title', 'Add category')

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
<div class="container" style="padding: 0px;padding-left:100px;padding-right: 100px;" >
  <h3>ADD Category</h3>
     <form  method="POST" action="{{url('admin/category/store')}}" style="margin-bottom: 100px;">
            {{ csrf_field() }}
        
              <div class="form-group">
                <label for="formGroupExampleInput">Parent ID</label>
                <input type="text" class="form-control"   name="parent_id" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Weight</label>
                <input type="text" class="form-control"   name="weight">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Title</label>
                <input type="text" class="form-control" name="title">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Description</label>
                <input type="text" class="form-control"  name="description" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Tag</label>
                <input type="text" class="form-control" name="tags" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Search Data</label>
                <input type="text" class="form-control"  name="searchData">
              </div>
              <button class="btn btn-primary" type="submit" name="save">SAVE</button>
              <a href="admin/category"><button class="btn btn-dark" type="button" >NO SAVE </button></a>
       
    </form>
</div> <!-- container -->
@endsection
