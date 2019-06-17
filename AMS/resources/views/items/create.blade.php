@extends ('shared/.master')
@section('title','Create Unit')

@section('content')
<div class="page-header">
    <h1>Add Unit </h1>
</div>

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>

    @endforeach
    </div>
@endif
    


<form method="POST" action="{{url('admin/units')}}"> 
    
    <div class="form-group">
        <label>Item name</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control">{{old('description')}}</textarea>
    </div>


    <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
         
            @foreach ($categories as $c)
            <option value="{{$c->id}}">{{$c->name}} </option>
            @endforeach
            </select>
     </div>



    <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control" value="{{old('price')}}"/>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="price" class="form-control" value="{{old('quantity')}}"/>
            </div>
        </div>


          <div class="col-md-2">
        <div class="form-group">
            <label>Unit</label>
            <select name="unit_id" class="form-control">
            <option value="">Select Unit </option>
            </select>
            </div>
        </div>


         <div class="col-md-2">
        <div class="form-group">
            <label>Re-order Level</label>
            <input type="text" name="reorder level" class="form-control" value="{{old('reorder_level')}}"/>
            </div>
        </div>


        </div>

     <div class="form-inline">
        <label>Status</label>
        <label>
        <input type="checkbox" name="status" class="form-control">Active
        </label>
    </div>

{{csrf_field()}}
<button type="submit" class="btn btn-success">Save</button>
    <a href="{{url('admin/units')}}" class="btn btn-danger">Back</a>
</form>

@endsection