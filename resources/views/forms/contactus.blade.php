@extends('master')

@section('content')
<h1 class="page-header">Here you can send us a message</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('contact-us') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputTitle">Title:</label>
                <input value="{{ old('title') }}" type="text" name="title" class="form-control original-text-input" id="InputTitle" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="InputArticle">Article:</label>
                <textarea name="article" id="summernote" class="form-control">{{ old('article') }}</textarea>
            </div>

            <input type="submit" name="submit" value="Send" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('contact-us') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection