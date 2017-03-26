@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Here you can view clients orders -</h1>
@if($orders)
<br><br>
<table class="table table-bordered">
    <tr>
        <th>Date</th>
        <th>Total</th>
        <th>Order details</th>
        <th>Client</th>
    </tr>
    @foreach($orders as $row)
    <tr>
        <td>{{ $row->created_at }}</td>
        <td>{{ $row->total }}$</td>
        <td>
            <ul>
                @foreach( unserialize($row->data) as $item)
                <li>{{ $item['name'] }} , <b>Quantity:</b> {{ $item['quantity'] }}, <b>Price:</b> {{ $item['price'] }}$</li>
                @endforeach
            </ul>
        </td>
        <td>{{ $row->name }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection