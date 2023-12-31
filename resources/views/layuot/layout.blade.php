
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>news</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('asset/css/modern-business.css') }}" rel="stylesheet">

</head>
<body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">news</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.allNews') }}">All News</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.create') }}">Create News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.contact') }}">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
@yield('content')
@include('layuot.footer')
