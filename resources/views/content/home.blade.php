    @extends('master')

    @section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to iBooks shopping site</h1>
            <p>Here you can buy all you watch</p>
            <div class="carousel slide" id="carousel-example-captions" data-ride="carousel" style="margin-bottom: 60px">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-captions" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active" style="background-image: url('images/bg1.jpg'); background-position: 50% 50%;  height: 300px;"></div>
                    <div class="item" style="background-image: url('images/bg2.jpg'); background-position: 50% 50%; height: 300px;"></div>
                    <div class="item" style="background-image: url('images/bg3.jpg'); background-position: 50% 50%; height: 300px;"></div>

                </div>
                <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">

                    </span>
                    <span class="sr-only">Previous
                    </span>
                </a>
                <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next
                    </span>
                </a>
            </div>


            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <h1 style="font-weight: 700">Categories</h1><br>

                <div class="row">
                    @if($categories)
                    @foreach($categories as $row)
                    <div class="col-lg-4">
                        <a href="{{ url('category/' . $row['url']) }}"><img class="img-circle" src="{{ asset('images/' . $row['image']) }}" alt="{{$row['title']}}" width="140" height="140"></a>
                        <h2>{{ $row['title'] }}</h2>
                        <p>{!! $row['article'] !!}</p>
                        <p><a href="{{ url('category/' . $row['url']) }}" class="btn btn-primary">All from {{ $row['title'] }}</a></p>

                    </div>

                    @endforeach
                    @else
                    <div class="col-md-12">
                        <p><i>No categories</i></p>
                    </div>

                    @endif


                </div><!-- /.row -->


                <!-- START THE FEATURETTES -->
                <br><br>
                <h1 style="font-weight: 700">Authors</h1><br>

                @if($authors)
                @foreach($authors as $key => $row)
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="{{ ($key%2) ? 'col-md-7' : 'col-md-7 col-md-push-5' }}">
                    <h2 class="featurette-heading">{{ $row['title'] }}</h2>
                        <p class="lead">{!! $row['article'] !!}</p>
                        <p><a href="{{ url('author/' . $row['url']) }}" class="btn btn-primary">All books of {{ $row['title'] }}</a></p>

                    </div>
                        <div class="{{ ($key%2) ? 'col-md-5' : 'col-md-5 col-md-pull-7' }}">


                            <a href="{{ url('author/' . $row['url']) }}"><img class="featurette-image img-responsive center-block" alt="{{$row['title']}}" src="{{ asset('images/' . $row['image']) }}"></a>
                    </div>

                </div>


                @endforeach
                @else
                <div class="col-md-12">
                    <p><i>No authors</i></p>
                </div>

                @endif






            </div>
    </div>
    @endsection


