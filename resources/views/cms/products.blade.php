@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit site products -</h1>
<p><a class="btn btn-primary" href="{{url('cms/products/create')}}">+ Add new product</a></p>
@if($products)
<br><br>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Product image</th>
        <th>Operation</th>
        <th>Updated at</th>
    </tr>
    @foreach($products as $row)
    <tr>
        <td>{{ $row['title'] }}</td>
        <td><img border="0" width="40" src="{{ asset('images/' . $row['image']) }}"></td>
        <td>
            <a href="{{ url('cms/products/' . $row['id'] . '/edit') }}">Edit</a> |
            <a href="{{ url('cms/products/' . $row['id']) }}">Delete</a>
        </td>
        <td>{{ $row['updated_at'] }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection