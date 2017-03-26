@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit site menu -</h1>
<p><a class="btn btn-primary" href="{{url('cms/menu/create')}}">+ Add new menu</a></p>
@if($menu)
<br><br>
<table class="table table-bordered">
    <tr>
        <th>Links</th>
        <th>Operation</th>
        <th>Updated at</th>
    </tr>
    @foreach($menu as $row)
    <tr>
        <td>{{ $row['link'] }}</td>
        <td>
            <a href="{{ url('cms/menu/' . $row['id'] . '/edit') }}">Edit</a> |
            <a href="{{ url('cms/menu/' . $row['id']) }}">Delete</a>
        </td>
        <td>{{ $row['updated_at'] }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection