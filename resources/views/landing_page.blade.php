@extends('layouts.app')

@section('content')
<!-- header section starts -->
<header class="header">
    <section class="flex">
        <a href="" class="logo">
            <img src="{{ asset('images/ncba_mpawa.png') }}" alt="">
        </a>
        <nav class="navbar">
            <a href="">Home</a>
            <a href="">About companion</a>
            <a href="">How to participate</a>
            <a href="">Testimonials</a>
            <a href="">Contestors</a>
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

    </div>

</section>
<!-- about section ends -->



 <!-- challenge section starts -->
 <section class="challenge" id="challenge">
    <div class="heading">
        <h3>Chuzi Challenge</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis varius tortor dolor eu. Adipiscing nisl at adipiscing ut.</p>
    </div>
    <div class="content">

    </div>

</section>
<!-- challenge section ends -->

<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('images/ncba_mpawa_white.png') }}" alt="NCBA MPAWA"/>
        </div>

        <div class="box">
            <h3>Shopping</h3>
        </div>

        <div class="box">
            <h3>Other Links</h3>

        </div>

        <div class="box">
            <h3>Follow us on:</h3>

        </div>
    </div>
</section>

<!-- footer section ends -->


@endsection
