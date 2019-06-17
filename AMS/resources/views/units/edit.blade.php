@extends ('shared/.master')
@section('title','Create Unit')

@section('content')
<div class="page-header">
    <h1>Edit Unit </h1>
</div>

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>

    @endforeach
    </div>
@endif

{{Form::open(['url'=>'admin/units/'.$unit->id,'method'=>'PUT'])}}
<div class="form-group">
    {{Form::label('Unit Name')}}
    {{Form::text('name',$unit->name,['class'=>'form-control'])}}
  
</div>


<div class="form-group">
    {{Form::label('Unit Code')}}
    {{Form::text('code',$unit->code,['class'=>'form-control'])}}


   
<button type="submit" class="btn btn-success">Save</button>
    <a href="{{url('admin/units')}}" class="btn btn-danger">Back</a>
</form>

{{Form::close()}}


@endsection