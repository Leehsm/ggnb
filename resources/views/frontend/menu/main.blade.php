@extends('frontend.ggnbmain')
@section('frontend')
@section('title')
GGNB 
@endsection

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
        <h1>GoodGoodNotBad</h1>
        <h2>Where big dreams, limited resources, and spirits come together in a harmonious space of transformation.</h2>
        <a href="{{ route('aboutus') }}" class="btn-about">About Us</a>
    </div>
</section><!-- End Hero -->

@endsection