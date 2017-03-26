@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit this product -</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('cms/products/' . $product['id']) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{ $product['id'] }}">
            <div class="form-group">
                <label for="InputCategory">Category:</label>
                <select name="category" id="InputCategory" class="form-control">
                    @foreach($categories as $row)
                    <option value="{{ $row->id }}">{{ $row->title }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="InputTitle">Title:</label>
                <input value="{{ $product['title'] }}" type="text" name="title" class="form-control original-text-input" id="InputTitle" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="InputAuthor">Author:</label>
                <select name="author" id="InputAuthor" class="form-control">
                    @foreach($authors as $row)
                    <option value="{{ $row->id }}">{{ $row->title }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="InputArticle">Article:</label>
                <textarea name="article" id="summernote" class="form-control">{{ $product['article'] }}</textarea>
            </div>

            <div class="form-group">
                <label for="InputUrl">Url:</label>
                <input value="{{ $product['url'] }}" type="text" name="url" class="form-control target-text-input" id="InputUrl" placeholder="Url">
            </div>

            <div class="form-group">
                <label for="InputPrice">Price:</label>
                <input value="{{ $product['price'] }}" type="text" name="price" class="form-control" id="InputPrice" placeholder="Price">
            </div>

            <div class="form-group">
                <label for="InputImage">Change product image:</label><br>
                <img border="0" width="60" src="{{ asset('images/' . $product['image']) }}"><br><br>
                <input type="file" name="image" id="InputImage">
            </div>
            <input type="submit" name="submit" value="Update product" class="btn btn-primary">
            <a class="btn btn-default" href="{{ url('cms/products') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection