
@extends('admin.layouts.app')

@section('title', 'Account')

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
  background-color: #465155;
  color: white;
}
</style>
<a href="admin/addaccount"><button type="button" class="btn btn-secondary btn-lg btn-block">Add account</button></a>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Created_at</th>
    <th>Updated_at</th>
    <th>Role</th>
    <th>Edit/Delete</th>
  </tr>
  @foreach($accounts as $value)
  <tr>
    <td>{{$value->id}}</td>
    <td>{{$value->name}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->created_at}}</td>
    <td>{{$value->updated_at}}</td>
    <td>{{$value->role}}</td>
    <td>
      <a href="admin/editaccount/{{$value->id}}" class="fa fa-pencil-square-o" >  /  </a>
      <a href="admin/deleteaccount/{{$value->id}}" onclick="return confirm('Delete Account?')" class="fa fa-trash"></a>
    </td>
  </tr>
@endforeach
</table>
{!! $accounts->links() !!}
@endsection


