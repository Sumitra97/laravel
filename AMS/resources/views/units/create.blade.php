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
        <label>Unit name</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
    </div>

    <div class="form-group">

        <label>Unit code</label>
        <input type="text" name="code" class="form-control" value="{{old('code')}}"/>
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