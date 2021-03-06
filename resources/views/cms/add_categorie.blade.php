@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can add new category</h1>
<div class="row">
      <div class="col-md-6">
        <form action="{{ url('cms/categories') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputTitle">Title:</label>
                <input value="{{ old('title') }}" type="text" name="title" class="form-control original-text-input" id="InputTitle" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="InputArticle">Article:</label>
                <textarea name="article" id="summernote" class="form-control">{{ old('article') }}</textarea>
            </div>

            <div class="form-group">
                <label for="InputUrl">Url:</label>
                <input value="{{ old('url') }}" type="text" name="url" class="form-control target-text-input" id="InputUrl" placeholder="Url">
            </div>

            <div class="form-group">
                <label for="InputImage">Category image:</label>
                <input type="file" name="image" id="InputImage">
            </div>

            <input type="submit" name="submit" value="Save content" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/content') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection