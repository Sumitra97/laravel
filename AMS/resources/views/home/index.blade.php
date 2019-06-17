@extends('shared.master')
@section('title','Contacts')
@section('content')

<div class="page-header">
<h1>Contacts </h1>
</div>

<div class="pull-right">
<p>
    <a href="{{url('create')}}" class="btn btn-primary"> Add Contact </a>
</p>
</div>

<table class="table striped"  >
    <tr>
        <th> Id </th>
       
        <th> Name </th>
      
        <th> Email </th>
      
        <th> Subject </th>
        
        <th> Status </th>
       
        <th>Action</th>
       
        
    </tr>

    @foreach($contacts as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->name}}</td>

        <td>{{$c->email}}</td>
        <td>{{$c->subject}}</td>
        <td>
        @if($c->status)
            <label class="label label-success">Active</label>
            @else
            <label class="label label-danger">Inactive</label>
        @endif

      

        <td>
        Edit
        Delete
        </td>
        
    </tr>
    @endforeach
</table>
@endsection