@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can add new menu</h1>
<div class="row">
      <div class="col-md-6">
        <form action="{{ url('cms/menu') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputLink">Link:</label>
                <input value="{{ old('link') }}" type="text" name="link" class="form-control original-text-input" id="InputLink" placeholder="Link">
            </div>
            <div class="form-group">
                <label for="InputTitle">Title:</label>
                <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="InputTitle" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="InputUrl">Url:</label>
                <input value="{{ old('url') }}" type="text" name="url" class="form-control target-text-input" id="InputUrl" placeholder="Url">
            </div>
            <input type="submit" name="submit" value="Save menu" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/menu') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection