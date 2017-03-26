<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <script> var BASE_URL = '{{ url('') }}/'</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width, initial scale=1.0">
    @include('inc.header_css')
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}">iBooks</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                @if($menu)

                @foreach($menu as $row)
                <li><a href="{{ url($row['url']) }}">{{ $row['link'] }}</a></li>
                @endforeach

                @endif

                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@if(isset($shop[$route])) {{$shop[$route]}} @else Books @endif<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li @if($route == 'books') class="active" @endif ><a href="{{url('books') }}">Books</a></li>
                        <li @if($route == 'authors') class="active" @endif ><a href="{{url('authors') }}">Authors</a></li>
                        <li @if($route == 'categories') class="active" @endif ><a href="{{ url('categories') }}">Categories</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{ url('shop/checkout') }}">
                        <img border="0" width="20" src="{{ asset('images/shopping-cart.png') }}">
                        <div class="total-cart">{{ Cart::getTotalQuantity() }}</div>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                @if( Session::has('user_id') )
                <li><a href="{{ url('user/myorders') }}">{{ Session::get('user_name') }}</a></li>
                @if( Session::has('is_admin') )
                <li><a href="{{ url('cms/dashboard') }}">CMS DASHBOARD</a></li>
                @endif
                <li><a href="{{ url('user/logout') }}">Logout</a></li>
                @else
                <li><a href="{{ url('user/signin') }}">Sign in</a></li>
                <li><a href="{{ url('user/signup') }}">Sign up</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav><br><br><br>

    <div class="container">
        @include('inc.sm')
        @include('inc.errors')
        @yield('content')
    </div>


<hr>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">iBooks &copy; {{ date('Y') }}</p>

        </div>
    </div>
</div>

@include('inc.footer_js')
</body>
</html>