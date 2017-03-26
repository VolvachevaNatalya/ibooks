@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit site categories -</h1>
<p><a class="btn btn-primary" href="{{url('cms/categories/create')}}">+ Add new category</a></p>
@if($categories)
<br><br>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Category image</th>
        <th>Operation</th>
        <th>Updated at</th>
    </tr>
    @foreach($categories as $row)
    <tr>
        <td>{{ $row['title'] }}</td>
        <td><img border="0" width="40" src="{{ asset('images/' . $row['image']) }}"></td>
        <td>
            <a href="{{ url('cms/categories/' . $row['id'] . '/edit') }}">Edit</a> |
            <a href="{{ url('cms/categories/' . $row['id']) }}">Delete</a>
        </td>
        <td>{{ $row['updated_at'] }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection