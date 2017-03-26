@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit this author -</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('cms/authors/' . $author['id']) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{ $author['id'] }}">
            <div class="form-group">
                <label for="InputTitle">Name:</label>
                <input value="{{ $author['title'] }}" type="text" name="title" class="form-control original-text-input" id="InputTitle" placeholder="Author name">
            </div>

            <div class="form-group">
                <label for="InputArticle">Article:</label>
                <textarea name="article" id="summernote" class="form-control">{{ $author['article'] }}</textarea>
            </div>

            <div class="form-group">
                <label for="InputUrl">Url:</label>
                <input value="{{ $author['url'] }}" type="text" name="url" class="form-control target-text-input" id="InputUrl" placeholder="Url">
            </div>

            <div class="form-group">
                <label for="InputImage">Change author image:</label><br>
                <img border="0" width="60" src="{{ asset('images/' . $author['image']) }}"><br><br>
                <input type="file" name="image" id="InputImage">
            </div>
            <input type="submit" name="submit" value="Update author" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/authors') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection