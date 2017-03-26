@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Checkout page</h1>
        <br>
        @if($cart)
        <table class="table table-bordered">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Sub total</th>
            </tr>
            @foreach($cart as $row)
            <tr>
                <td>{{ $row['name'] }}</td>
                <td>
                    <input data-id="{{ $row['id'] }}" data-op="minus" type="button" value="-" class="update-cart">
                    <input class="text-center" type="text" size="1" value="{{ $row['quantity'] }}">
                    <input data-id="{{ $row['id'] }}" data-op="plus" type="button" value="+" class="update-cart">
                </td>
                <td>{{ $row['price'] }}</td>
                <td>{{ $row['price'] * $row['quantity']  }}</td>
            </tr>
            @endforeach
        </table>
        <p class="pull-right"><a href="{{ url('shop/clear-cart') }}" class="btn btn-default">Clear cart</a></p>
        <p><b>Total: </b>{{ Cart::getTotal() }}$</p>
        <p><a href="{{ url('shop/order') }}" class="btn btn-primary">Order now</a></p>
        @else
        <p><i>No items in the cart...</i></p>
        @endif
    </div>
</div>
@endsection