@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Here you can sign in with your account - </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputEmail">Email:</label>
                <input value="{{ old('email') }}" type="text" name="email" class="form-control" id="InputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="InputPassword">Password:</label>
                <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
            </div>
            <input type="submit" name="submit" value="Sign in" class="btn btn-primary">
            <a href="{{ url('user/forgot') }}">Forgot your password?</a>
        </form>
    </div>
</div>
@endsection