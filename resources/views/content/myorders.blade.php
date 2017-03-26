@extends('master')

@section('content')
<h1 class="page-header">Here you can view all your orders</h1>
@if($orders)



<table class="table table-bordered">
    <tr>
        <th>Date</th>
        <th>Total</th>
        <th>Order details</th>
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
    </tr>
    @endforeach
</table>
@else
<p>You don't have any orders.</p>
@endif
@endsection