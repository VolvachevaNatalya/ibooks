    @extends('master')

    @section('content')

    @if( $contents )

    @foreach($contents as $row)
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $row['title'] }}</h2>
            <p>{!! $row['article'] !!}</p>
        </div>
    </div>
    @endforeach

    @else
    <div class="row">
        <div class="col-md-12">
            <p><i>No contents for this menu item...</i></p>
        </div>
    </div>
    @endif

    @endsection