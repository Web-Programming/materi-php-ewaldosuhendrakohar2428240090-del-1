<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','dashboard')</title>
<link href="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"
    rel="stylesheet"
    integrity=""
    crossorigin="anonymous">
</head>

<body>
    <nav class="Navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            @yield('navbar')
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 col-bg-2 bg-light border-end min-vh-100 p-3">
                @selected('sidebar')
                    @include('app.sidebar')   
                @show
            </aside>
            <main class="col-md-9 col-lg-10 p-4">
                @yield('content')

            </main>
        </div>
    </div>
    <script src=""
    integrity=""></script>
</body>
</html>