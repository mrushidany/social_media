@extends('layouts.app')

@section('content')
<!-- header section starts -->
<header class="header">
    <section class="flex">
        <a href="" class="logo">
            <img src="{{ asset('images/ncba_mpawa.png') }}" alt="">
        </a>
        <nav class="navbar">
            <a href="">home</a>
            <a href="">about companion</a>
            <a href="">how to participate</a>
            <a href="">testimonials</a>
            <a href="">contestors</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
</header>
<!-- header section ends -->

<!-- home section starts -->
<div class="home-bg">
    <section class="home" id="home">
        <div class="content">
            <p>Shinda dabo ya akiba ukisevu na <span class="red">M-Pawa</span></p>
        </div>
    </section>
</div>
<!-- home section ends -->

 <!-- about section starts -->
<section class="about" id="about">
    <div class="image">
        <img src="{{ asset('images/about_chuzi.png') }}" alt="Chuzi Limekubali">
    </div>
    <div class="content">
        <h3>A cup of coffee can complete your day</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non neque esse odio magni tenetur odit nostrum quae maxime consectetur deserunt sunt fugit qui, molestias sequi vel aperiam voluptate provident quidem? lit. Est aspernatur deleniti enim sapiente quod, optio consectetur! Dolore officia enim optio.</p>
        <a class="btn" href="#menu">our menu</a>
    </div>

</section>
<!-- about section ends -->



<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('images/ncba_mpawa_white.png') }}" alt="NCBA MPAWA"/>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>07:00am to 09:00pm</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>shop location</h3>
            <p>mumbai, india - 400104</p>
        </div>

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>+255-718-058355</p>
            <p>+255-624-071607</p>
        </div>
    </div>
</section>

<!-- footer section ends -->


@endsection
