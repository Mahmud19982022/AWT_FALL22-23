@extends('layouts.app')
@section('content')

<h2>Registration</h2>

<form action="{{route('registration')}}" class="form-group" method="post">

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
        <span>First Name</span>
        <input type="text" name="fname" value="{{old('fname')}}" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Last Name</span>
        <input type="text" name="lname" value="{{old('lname')}}" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
    </div>

    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="password" name="password" value="{{old('password')}}" class="form-control">
    </div>

    
    <div class="col-md-4 form-group">
        <span>Gender</span>
        <input type="radio" name="gender"value="male">
             <label for="male">Male</label>
        <input type="radio" name="gender"value="female">
            <label for="female">Female</label>
    </div>

    <div class="col-md-4 form-group">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
    </div>

    
    <div class="col-md-4 form-group">
        <span>Phone No</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
    </div>



<br>
    <input type="submit" name="submit" value="Register" class="btn btn-success">
</form>    

@endsection 