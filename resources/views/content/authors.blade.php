@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1> {{ $title }} </h1>
        <p>Here is the list of all authors of the books that you can buy in our store!</p>
    </div>
</div>
<div class="row">
    @if($authors)
    @foreach($authors as $row)
    <div class="col-md-4 col-sm-6">
        <h2>{{ $row['title'] }}</h2>
        <p><img border="0" width="200" src="{{ asset('images/' . $row['image']) }}"></p>
        <p>{!! $row['article'] !!}</p>
        <p><a href="{{ url('author/' . $row['url']) }}" class="btn btn-primary">All books of {{ $row['title'] }}</a></p>

    </div>

    @endforeach
    @else
    <div class="col-md-12">
        <p><i>No authors</i></p>
    </div>

    @endif
</div>

@endsection

