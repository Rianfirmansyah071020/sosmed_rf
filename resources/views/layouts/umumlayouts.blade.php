<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RF</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@600&family=Poppins:wght@300;500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')

    <div id="loading-container">
        <div id="loading-icon">
        </div>
        <h5 class="loading">Loading....</h5>
    </div>

    <div class="container-fluid overflow-hidden">
        <div class="row">
            <div class="col-lg-2 col-xl-2 col-md-3 d-none d-sm-none d-md-block d-xl-block d-lg-block sidebar">
                <div class="text-logo">
                    <h1>RF</h1>
                </div>
                <hr>
            </div>
            <div class="col-lg-10 col-xl-10 col-md-10 col-12 d-sm-block d-md-block d-xl-block d-lg-block content">
                @yield('content')
            </div>
            <div
                class="col-lg-2 col-xl-2 col-md-2 d-sm-none d-none d-md-block d-xl-block d-lg-block sidebar-disarankan">
                a
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
