@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit this menu -</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('cms/menu/' . $menu['id']) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{ $menu['id'] }}">
            <div class="form-group">
                <div class="form-group">
                    <label for="InputLink">Link:</label>
                    <input value="{{ $menu['link'] }}" type="text" name="link" class="form-control original-text-input" id="InputLink" placeholder="Link">
                </div>
                <label for="InputTtitle">Title:</label>
                <input value="{{ $menu['title']  }}" type="text" name="title" class="form-control" id="InputTtitle" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="InputUrl">Url:</label>
                <input value="{{ $menu['url'] }}" type="text" name="url" class="form-control target-text-input" id="InputUrl" placeholder="Url">
            </div>
            <input type="submit" name="submit" value="Update menu" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/menu') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection