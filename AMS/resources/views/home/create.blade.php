@extends('shared.master')
@section('title','Contact Us')
@section('content')

<form method="POST" action="">
        <div class="form-group">
            <label>Name</label>
            <input type='text' name="name" class="form-control">
        </div>

                <div class="form-group">
            <label>Email</label>
            <input type='email' name="email" class="form-control">
        </div>
       

                <div class="form-group">
            <label>Subject</label>
            <input type='text' name="subject" class="form-control">
        </div>


         <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" style="height:150px"> </textarea>
        </div>

        {{csrf_field()}}

        <button type="submit" class="btn btn-success"> Send </button>
        <a href="{{url('')}}" class="btn btn-danger"> Back </a>

</form>

@endsection


    
