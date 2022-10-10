@extends('layouts.app')
@section('content')

<h2>Sign in </h2>

<form action="{{route('login')}}" class="form-group" method="post">

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
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">

    </div>

    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="password" name="password" value="{{old('password')}}" class="form-control">

    </div>
<br>
    <input type="submit" name="submit" value="Sign in" class="btn btn-success">
</form>    

@endsection