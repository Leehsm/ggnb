
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        {{-- <h1 class="logo me-auto me-lg-0"><a href="index.html">GoodGoodNotBad</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo"><img src="{{asset('assets/img/ggnb.png')}}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="{{ route('aboutus') }}">About Us</a></li>
            <li><a href="{{ route('misionvision') }}">Mision & Vision</a></li>
            <li><a href="{{ route('productservices') }}">Products & Services</a></li>
            <li><a href="{{ route('blog') }}">Blogs</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>

</header><!-- End Header -->