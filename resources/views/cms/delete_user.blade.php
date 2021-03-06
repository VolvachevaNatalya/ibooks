@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Are you sure you want to delete this user?</h1>
<div class="row">
      <div class="col-md-6">
        <form action="{{ url('cms/users/' . $id)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <input type="submit" name="submit" value="Delete" class="btn btn-danger">
            <a class="btn btn-default" href="{{ url('cms/users') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection