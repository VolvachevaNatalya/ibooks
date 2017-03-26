    @extends('master')

    @section('content')


    <div class="row">
        @if($products)
        @foreach($products as $row)
        <div class="col-sm-6 col-md-4">
            <h3>{{ $row['title'] }}</h3>
            <p><a href="{{ url('book/' . $row['url']) }}"><img style="max-height: 265px;" border="0" width="200" src="{{ asset('images/' . $row['image']) }}" ></a></p>
            <p><b>Price on site: </b>{{$row['price'] }}$ </p>
            <p>
                <input @if( Cart::get($row['id']) ) disabled="disabled" @endif data-id="{{ $row['id'] }}" type="button" class="btn btn-success add-to-cart" value="+ Add to cart">
                <a href="{{ url('book/' . $row['url']) }}" class="btn btn-primary">View product details</a>
            </p>


        </div>
        @endforeach
        @else
        <div class="col-md-12">
            <p><i>No products for this category...</i></p>
        </div>
        @endif
    </div>

    @endsection

