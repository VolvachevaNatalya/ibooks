@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit this content -</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('cms/content/' . $content['id']) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="InputMenu">Menu:</label>
                <select name="menu" id="InputMenu" class="form-control">
                    @foreach($menu as $row)
                    <option value="{{ $row->id }}">{{ $row->link }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="InputTitle">Title:</label>
                <input value="{{ $content['title'] }}" type="text" name="title" class="form-control" id="InputTitle" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="InputArticle">Article:</label>
                <textarea name="article" id="summernote" class="form-control">{{ $content['article'] }}</textarea>
            </div>
            <input type="submit" name="submit" value="Update content" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/content') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection