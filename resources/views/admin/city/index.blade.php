
@extends('admin.layouts.app')

@section('title', 'City')

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

<a href="admin/addcity"><button type="button" class="btn btn-secondary btn-lg btn-block">Add City</button></a>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>LATITUDE</th>
    <th>LONGITUDE</th>
    <th>PHONE</th>
    <th>WEBSITE</th>
    <th>EMAIL</th>
    <th>REGION</th>
    <th>Title</th>
    <th>Edit</th>
  </tr>
  @foreach($city as $value)
  <tr>
    <td>{{$value->id}}</td>
    <td>{{$value->latitude}}</td>
    <td>{{$value->longitude}}</td>
    <td>{{$value->phone}}</td>
    <td>{{$value->website}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->region_id}}</td>
   <!--  <td>{{$value->title}}</td> -->
    <td> @foreach (json_decode($value->title) as $member)
     {{ $member}}
@endforeach
</td>
    <td>
      <a href="admin/city/edit/{{$value->id}}" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deletecity/{{$value->id}}" onclick="return confirm('Delete this City ?')" class="fa fa-trash"></a>
    </td>

  </tr>
@endforeach
</table>
{!! $city->links() !!}

@endsection