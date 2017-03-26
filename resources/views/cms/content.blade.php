@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit site content -</h1>
<p><a class="btn btn-primary" href="{{url('cms/content/create')}}">+ Add new content</a></p>
@if($content)
<br><br>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Operation</th>
        <th>Updated at</th>
    </tr>
    @foreach($content as $row)
    <tr>
        <td>{{ $row['title'] }}</td>
        <td>
            <a href="{{ url('cms/content/' . $row['id'] . '/edit') }}">Edit</a> |
            <a href="{{ url('cms/content/' . $row['id']) }}">Delete</a>
        </td>
        <td>{{ $row['updated_at'] }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection