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
            <h3>coffee heaven</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero excepturi cumque error.</p>
            <a href="#about" class="btn">about us</a>
        </div>
    </section>
</div>
<!-- home section ends -->


@endsection
