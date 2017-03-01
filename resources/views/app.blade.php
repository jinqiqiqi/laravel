<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Quickstart - Basic</title>
        <link href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet"/>
        <script type="text/javascript" src="{{ asset('bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Content  -->
            </nav>
        </div>

        @yield('content')
        
    </body>
  
</html>
