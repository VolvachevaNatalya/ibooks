@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Here you can sign up for new account - </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputName">Name:</label>
                <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="InputName" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="InputEmail">Email:</label>
                <input value="{{ old('email') }}" type="text" name="email" class="form-control" id="InputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="InputPassword">Password:</label>
                <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="InputConfirmPassword">Confirm password:</label>
                <input type="password" name="password_confirmation" class="form-control" id="InputConfirmPassword" placeholder="Confirm password">
            </div>
            <input type="submit" name="submit" value="Sign up" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection