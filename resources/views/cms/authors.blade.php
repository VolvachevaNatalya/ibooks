@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit site authors -</h1>
<p><a class="btn btn-primary" href="{{url('cms/authors/create')}}">+ Add new author</a></p>
@if($authors)
<br><br>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Author picture</th>
        <th>Operation</th>
        <th>Updated at</th>
    </tr>
    @foreach($authors as $row)
    <tr>
        <td>{{ $row['title'] }}</td>
        <td><img border="0" width="40" src="{{ asset('images/' . $row['image']) }}"></td>
        <td>
            <a href="{{ url('cms/authors/' . $row['id'] . '/edit') }}">Edit</a> |
            <a href="{{ url('cms/authors/' . $row['id']) }}">Delete</a>
        </td>
        <td>{{ $row['updated_at'] }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection