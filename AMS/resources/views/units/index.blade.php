@extends('shared.master')
@section('title','Units')
@section('content')

<div class="page-header">
<h1>Units </h1>
</div>

<div class="pull-right">
<p>
    <a href="{{url('admin/units/create')}}" class="btn btn-primary"> Add Supplier </a>
</p>
</div>
<table class="table striped"  >
    <tr>
        <th> Id </th>
        <th> Name </th>
        <th> Code </th>
        <th> Status </th>
        <th>Action</th>
    </tr>

    @foreach($units as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->name}}</td>
        <td>{{$c->code}}</td>
        <td>
        @if($c->status)
            <label class="label label-success">Active</label>
            @else
            <label class="label label-danger">Inactive</label>
        @endif
        </td>
        <td>
      
 <form action="{{url('admin/units/'.$c->id)}}" method="post"> 
      
     <a href="{{url('admin/units/'.$c->id.'/edit')}}" class="btn btn-success"> Edit </a>
    {{csrf_field()}}
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">DELETE </button>
      <input type="hidden" name="_method" value="DELETE"/>
      
</form> 
        </td>
        
        
    </tr>
    @endforeach
</table>
@endsection