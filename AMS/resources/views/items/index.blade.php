@extends('shared.master')
@section('title','Items')
@section('content')

<div class="page-header">
<h1>Items </h1>
</div>

<div class="pull-right">
<p>
    <a href="{{url('admin/items/create')}}" class="btn btn-primary"> Add Item(s) </a>
</p>
</div>
<table class="table striped"  >
    <tr>
         <th> Id </th>
        <th> Name </th>
       <th> Picture </th>
       <th> Price </th>
       <th> Quantity </th>
       <th> Status </th>
       <th>Address </th>
       <th>Action</th>
    </tr>

    @foreach($items as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->name}}</td>
        <td>{{$c->picture}}</td>
        <td>{{$c->price}}</td>
        <td>{{$c->quantity}}</td>
        <td>
        @if($c->status)
            <label class="label label-success">Active</label>
            @else
            <label class="label label-danger">Inactive</label>
        @endif
        </td>
        <td>
      
 <form action="{{url('admin/items/'.$c->id)}}" method="post"> 
      
     <a href="{{url('admin/items/'.$c->id.'/edit')}}" class="btn btn-success"> Edit </a>
    {{csrf_field()}}
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">DELETE </button>
      <input type="hidden" name="_method" value="DELETE"/>
      
</form> 
        </td>
        
        
    </tr>
    @endforeach
</table>
@endsection