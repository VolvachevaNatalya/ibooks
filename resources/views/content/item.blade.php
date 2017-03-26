    @extends('master')

    @section('content')


    <div class="row">
        @if($product)
        <div class="col-md-12">

            <h2>{{ $product->title }}</h2>
            <p><a href="{{ url('author/' . $product->author_url) }}">{{ $product->author_name }}</a></p>
            <p><img border="0" width="300" src="{{ asset('images/' . $product->image) }}" </p>
            <p>{!! $product->article !!}</p>
            <p><b>Price on site: </b>{{$product->price }}$ </p>
            <p>
                <input @if( Cart::get($product->id) ) disabled="disabled" @endif data-id="{{ $product->id }}" type="button" class="btn btn-success add-to-cart" value="+ Add to cart">
                <a class="btn btn-primary" href="{{ url('shop/checkout') }}">Checkout</a>
                <a class="btn btn-warning"href="javascript:history.back();">❮ Back</a>
            </p>


        </div>
        @else
        <div class="col-md-12">
            <p><i>No product...</i></p>
        </div>
        @endif
    </div>

    @endsection

