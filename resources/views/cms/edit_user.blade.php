@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit this user -</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('cms/users/' . $user['id']) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{ $user['id'] }}">
            <div class="form-group">
                <label for="InputName">Name:</label>
                <input value="{{ $user['name'] }}" type="text" name="name" class="form-control original-text-input" id="InputName" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="InputEmail">Email:</label>
                <input value="{{ $user['email'] }}" type="text" name="email" class="form-control original-text-input" id="InputEmail" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="InputUrl">Password:</label>
                <input value="{{ $user['password'] }}" type="text" name="password" class="form-control original-text-input" id="InputPassword" placeholder="Password">
            </div>

            <input type="submit" name="submit" value="Update user" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/users') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection