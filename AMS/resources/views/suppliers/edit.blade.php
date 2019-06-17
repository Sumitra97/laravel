@extends('shared.master')
@section('title','Edit Supplier')
@section('content')

<div class="page-header">
    <h1>Edit Supplier </h1>
</div>

<form method="POST" action="{{url('suppliers/'.$supplier->id)}}">
<input type="hidden" name="_method" value="put">
        <div class="form-group">
            <label>Name</label>
            <input type='text' name="supplier_name" required="required" class="form-control" value="{{$supplier->supplier_name}}">
        </div>

                <div class="form-group">
            <label>Email</label>
            <input type='email' name="supplier_email" required="required" class="form-control" value="{{$supplier->supplier_email}}">
        </div>
       

                <div class="form-group">
            <label>Contact No.</label>
            <input type='text' name="contact_no" required="required" class="form-control" value="{{$supplier->contact_no}}">
        </div>


        
        <div class="form-group">
            <label>Address</label>
            <input type='text' name="address" required="required" class="form-control" value="{{$supplier->address}}">
        </div>

        
        <div class="form-inline">
            <label>status</label>
         <label>   <input type='checkbox' name="status" 
         @if ($supplier->status) 
            checked="checked"
            @endif
            />
            Active </label>
        </div>


         

        {{csrf_field()}}

        <button type="submit" class="btn btn-success"> Send </button>
        <a href="{{url('suppliers')}}" class="btn btn-danger"> Back </a>

</form>

@endsection


    
