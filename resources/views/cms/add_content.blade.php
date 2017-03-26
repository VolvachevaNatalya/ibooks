@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can add new content</h1>
<div class="row">
      <div class="col-md-6">
        <form action="{{ url('cms/content') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputMenu">Menu:</label>
                <select name="menu" id="InputMenu" class="form-control">
                    <option value="">Choose menu...</option>
                    @foreach($menu as $row)
                    <option value="{{ $row['id'] }}">{{ $row['link'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="InputTitle">Title:</label>
                <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="InputTitle" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="InputArticle">Article:</label>
                <textarea name="article" id="summernote" class="form-control">{{ old('article') }}</textarea>
            </div>

            <input type="submit" name="submit" value="Save content" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/content') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection