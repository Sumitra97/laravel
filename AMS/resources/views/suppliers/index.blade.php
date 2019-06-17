@extends('shared.master')
@section('title','Suppliers')
@section('content')

<div class="page-header">
<h1>suppliers </h1>
</div>

<div class="pull-right">
<p>
    <a href="{{url('suppliers/create')}}" class="btn btn-primary"> Add Supplier </a>
</p>
</div>
<table class="table striped"  >
    <tr>
        <th> Id </th>
       
        <th> Name </th>
      
        <th> Email </th>
      
        <th> Contact No. </th>
        
        <th> Status </th>

        <th>Address </th>
       
        <th>Action</th>
       
        
    </tr>

    @foreach($suppliers as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->supplier_name}}</td>

        <td>{{$c->supplier_email}}</td>
        
        <td>{{$c->contact_no}}</td>
        <td>{{$c->address}}</td>
        <td>
        @if($c->status)
            <label class="label label-success">Active</label>
            @else
            <label class="label label-danger">Inactive</label>
        @endif
        </td>
        <td>
      
 <form action="{{url('suppliers/'.$c->id)}}" method="post"> 
      
     <a href="{{url('suppliers/'.$c->id.'/edit')}}" class="btn btn-success"> Edit </a>
    {{csrf_field()}}
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">DELETE </button>
      <input type="hidden" name="_method" value="DELETE"/>
      
</form> 
        </td>
        
        
    </tr>
    @endforeach
</table>
@endsection