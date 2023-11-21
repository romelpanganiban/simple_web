<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
		<link href="{{asset('assets/css/header.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/public.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<header class="site-header header-bg">

<div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="/assets/images/hotel-logo.jpg" style="width:100px; height:100px;" class="img-logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"> Home </a>
                    </li>
                    <li class="nav-item">   
                        <a class="nav-link text-white" href="#"> About Us </a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"> Our Services </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"> FAQ </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"> Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="header-btns">
                <a href="#" class="btn btn-theme">CALL US NOW</a>

            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>
        <div class="text-center mt-60">
                    <h1 class="title-content text-white">Enjoy Every <br> Beautiful Moment</h1>
                    <br>
                    <p class="p-content text-white">Unwind on our exclusive terrace with panoramic views, providing the perfect setting to enjoy the beauty of the sunset.</p>
                    <br>
                    <br>

                 <div class="header-btns">
                        <a href="#" class="btn-book btn-theme">Book Now</a>

                 </div>
                 
        </div>
    </div>
 
</header>
</body>

</html>