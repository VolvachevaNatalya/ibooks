
<!DOCTYPE html>
<html>
    <head>
        <title>iBooks Admin Panel</title>
        <script> var BASE_URL = '{{ url('') }}/'</script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device width, initial scale=1.0">
        @include('inc.header_css')
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('cms/dashboard') }}">iBooks Admin Panel</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a target="_blank" href="{{ url('') }}">To the site</a></li>
                    <li><a href="{{ url('user/logout') }}">Logout</a></li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="{{ url('cms/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('cms/menu') }}">Menu</a></li>
                    <li><a href="{{ url('cms/content') }}">Content</a></li>
                    <li><a href="{{ url('cms/categories') }}">Categories</a></li>
                    <li><a href="{{ url('cms/authors') }}">Authors</a></li>
                    <li><a href="{{ url('cms/products') }}">Products</a></li>
                    <li><a href="{{ url('cms/orders') }}">Orders</a></li>
                    <li><a href="{{ url('cms/users') }}">Users</a></li>
                </ul>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @include('inc.sm')
                @include('inc.errors')
                @yield('cms_content')


            </div>
        </div>
    </div>

    @include('inc.footer_js')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<!--    <script src="{{ asset('js/summernote-he-IL.js') }}"></script>-->
    <script>
    $(document).ready(function() {
        $('#summernote').summernote({
        height: 300
      //  lang: 'he-IL'
        });
    });
    </script>



    </body>
</html>