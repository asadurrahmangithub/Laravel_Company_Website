<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
{{--        <span>Saiful</span>--}}
        <div class="logo">
            <h1 class="text-light"><a href="{{route('home')}}"><img src="{{asset($logo->image)}}" alt=""></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{asset('frontEnd')}}/assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('home')}}#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="{{route('home')}}#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="{{route('home')}}#services">Services</a></li>
                <li><a class="nav-link scrollto" href="{{route('home')}}#portfolio">Portfolio</a></li>

                <li><a class="nav-link scrollto" href="{{route('contact-us')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
