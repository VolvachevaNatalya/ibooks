    @extends('master')

    @section('content')


    <div class="row">
        <div class="col-md-12">
            <h1> {{ $title }} </h1>
            <p>Here is the list of all books that are available in our store!</p>

            <div class="form-group">
                <select onchange="document.location.href=options [selectedIndex].value">
                    <option value="">Sort by price...</option>
                    <option @if($route == 'books/price_asc') selected @endif value="{{url('books/price_asc') }}">First cheap</option>
                    <option @if($route == 'books/price_desc') selected @endif value="{{ url('books/price_desc') }}">First expensive</option>
                    <option value="{{ url('books') }}">Without sorting</option>
                </select>
            </div>

        </div>
    </div>
    <div class="row">
        @if($products)
        @foreach($products as $row)
        <div class="col-md-4 col-sm-6">
            <h3>{{ $row->title }}</h3>
            <p><a href="{{ url('author/' . $row->author_url) }}">{{ $row->author_name }}</a></p>
            <a href="{{ url('book/' . $row->url) }}"><img style="max-height: 265px;" border="0" width="200" src="{{ asset('images/' . $row->image) }}"></a>

            <p><b>Price on site: </b>{{$row->price }}$ </p>


            <p>
                <input @if( Cart::get($row->id) ) disabled="disabled" @endif data-id="{{ $row->id }}" type="button" class="btn btn-success add-to-cart" value="+ Add to cart">
                <a href="{{ url('book/' . $row->url) }}" class="btn btn-primary">View product details</a>


            </p>
        </div>

        @endforeach
        @else
        <div class="col-md-12">
            <p><i>No books</i></p>
        </div>

        @endif
    </div>

    @endsection




