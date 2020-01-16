
@extends('admin.layouts.app')

@section('title', 'Category')

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
<a href="admin/addcategory"><button type="button" class="btn btn-secondary btn-lg btn-block">Add Category</button></a>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>PARENT ID</th>
    <th>WEIGHT</th>
    <th>TITLE</th>
    <th>DESCRIPTION</th>
    <th>Tags</th>
    <th>Edit/Del</th>

  </tr>
  @foreach($category as $value)
  <?php $tit=$value->title; $obj = json_decode($tit);$til= $obj->{'vi'};  
        $des=$value->description; $obj = json_decode($des); $des= $obj->{'vi'};
        $tags=$value->tags; $tags = json_decode($tags);$tags= $tags->{'vi'};?>
  <tr>
    <td>{{$value->id}}</td>
    <td>{{$value->parent_id}}</td>
    <td>{{$value->weight}}</td>
    <td>{{$til }}</td>
    <td>{{$des}}</td>
    <td>{{$tags}}</td>
    <td>
      <a href="admin/category/edit/{{$value->id}}" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deletecategory/{{$value->id}}" onclick="return confirm('Delete this Category?')" class="fa fa-trash"></a>
    </td>
  </tr>
@endforeach
</table>
{!! $category->links() !!}

@endsection