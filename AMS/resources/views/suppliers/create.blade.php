@extends('shared.master')
@section('title','Add Supplier')
@section('content')




<div class="page-header">
    <h1>Add Supplier </h1>
</div>


@if($errors->any())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    
    </div>
 @endif


<form method="POST" action="{{url('suppliers')}}">
        <div class="form-group">
            <label>Name</label>
            <input type='text' name="supplier_name"  class="form-control">
            <div>{{$errors->first('supplier_name')}}</div>
        </div>

                <div class="form-group">
            <label>Email</label>
            <input type='email' name="supplier_email"  class="form-control">
        </div>
       

                <div class="form-group">
            <label>Contact No.</label>
            <input type='text' name="contact_no"  class="form-control">
        </div>


        
        <div class="form-group">
            <label>Address</label>
            <input type='text' name="address"  class="form-control">
        </div>

        
        <div class="form-inline">
            <label>status</label>
         <label>   <input type='checkbox'  name="status">Active </label>
        </div>


        {{csrf_field()}}

        <button type="submit" class="btn btn-success"> Send </button>
        <a href="{{url('suppliers')}}" class="btn btn-danger"> Back </a>

</form>
@endsection


    
