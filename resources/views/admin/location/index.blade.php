
@extends('admin.layouts.app')

@section('title', 'Location')

@section('sidebar')
   <!--  <p>sidebar</p> -->
@endsection

@section('content')
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #656565;
  color: white;
}
</style>
<a href="admin/addlocation"><button type="button" class="btn btn-secondary btn-lg btn-block">Add Location</button></a>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>LATITUDE</th>
    <th>LONGITUDE</th>
    <th>ADDRESS</th>
    <th>PHONE</th>
   <!--  <th>WEBSITE</th> -->
    <th>CATEGORY ID</th>
    <th>CITY ID</th>
    <th>Edit/Del</th>

  </tr>
  @foreach($locations as $value)
  <tr>
    <td>{{$value->id}}</td>
    <td>{{$value->latitude}}</td>
    <td>{{$value->longitude}}</td>
    <td>{{$value->address}}</td>
    <td>{{$value->phone}}</td>
    <!-- <td>{{$value->website}}</td> -->
    <td>{{$value->category_id}}</td>
    <td>{{$value->city_id}}</td>
    <td>
      <a href="admin/editlocation/{{$value->id}}" class="fa fa-pencil-square-o" >  /  </a>
      <a href="admin/deletelocation/{{$value->id}}" onclick="return confirm('Delete this loacation?')" class="fa fa-trash"></a>
    </td>
  </tr>
@endforeach
</table>
{!! $locations->links() !!}
@endsection

