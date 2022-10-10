@extends('layouts.app')
@section('content')

<h2>Contact US</h2>

<form action="{{route('contact')}}" class="form-group" method="post">

{{csrf_field()}}

<!-- all errors at a time -->

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Subject</span>
        <input type="text" name="subject" value="{{old('subject')}}" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Message</span>
        <textarea class="form-control" rows="3" name="message" value="{{old('message')}}" placeholder="Type your thoughts..."></textarea>
    </div>

    <br>
    <input type="submit" name="submit" value="Submit" class="btn btn-success">
</form> 

@endsection 