@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1> Shop categories </h1>
        <p>Here is the list of all categories that are available in our store!</p>
    </div>
</div>
<div class="row">
    @if($categories)
    @foreach($categories as $row)
    <div class="col-md-4 col-sm-6">
        <h2>{{ $row['title'] }}</h2>
        <p><a href="{{ url('category/' . $row['url']) }}"><img border="0" width="200" src="{{ asset('images/' . $row['image']) }}"></a></p>
        <p>{!! $row['article'] !!}</p>
        <p><a href="{{ url('category/' . $row['url']) }}" class="btn btn-primary">All from {{ $row['title'] }}</a></p>

    </div>

    @endforeach
    @else
    <div class="col-md-12">
        <p><i>No categories</i></p>
    </div>

    @endif
</div>

@endsection

