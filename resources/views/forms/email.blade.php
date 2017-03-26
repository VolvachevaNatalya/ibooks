@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Please, fill in Email field</h1>
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

            <input type="submit" name="submit" value="Send" class="btn btn-primary">

        </form>
    </div>
</div>
@endsection