@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can add new user</h1>
<div class="row">
      <div class="col-md-6">
        <form action="{{ url('cms/users') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputTitle">Name:</label>
                <input value="{{ old('name') }}" type="text" name="name" class="form-control original-text-input" id="InputName" placeholder="User name">
            </div>

            <div class="form-group">
                <label for="InputTitle">Email:</label>
                <input value="{{ old('email') }}" type="text" name="email" class="form-control original-text-input" id="InputEmail" placeholder="User email">
            </div>

            <div class="form-group">
                <label for="InputUrl">Password:</label>
                <input value="{{ old('password') }}" type="text" name="password" class="form-control original-text-input" id="InputUrl" placeholder="Password">
            </div>

            <input type="submit" name="submit" value="Save user" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/users') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection