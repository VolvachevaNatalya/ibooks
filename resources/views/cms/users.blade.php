@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can edit users of your site -</h1>
<p><a class="btn btn-primary" href="{{url('cms/users/create')}}">+ Add new user</a></p>
@if($users)
<br><br>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Updated at</th>
    </tr>
    @foreach($users as $row)
    <tr>
        <td>{{ $row['name'] }}</td>
        <td>{{ $row['email'] }}</td>
        <td>{{ $row['password'] }}</td>
        <td>
            <a href="{{ url('cms/users/' . $row['id'] . '/edit') }}">Edit</a> |
            <a href="{{ url('cms/users/' . $row['id']) }}">Delete</a>
        </td>
        <td>{{ $row['updated_at'] }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection