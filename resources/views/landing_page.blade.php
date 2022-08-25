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
{{-- <section class="about" id="about">
    <div class="image">
        <img src="{{ asset('images/about_chuzi.png') }}" alt="Chuzi Limekubali">
        <a><img src="{{ asset('images/play.png') }}" alt="Press n Play"></a>
    </div>
    <div class="content">
        <h3>#Chuzilimekubali</h3>
        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. At viverra lectus tincidunt sed duis cursus aliquam. Viverra auctor adipiscing.dolor sit amet, consec tetur adipiscing elit. At viverra lectus tincidunt sed duis cursus aliquam. Viverra auctor adipiscing.dolor sit amet, consec tetur adipiscing elit. At viverra lectus tincidunt sed duis cursus aliquam. Viverra auctor adipiscing.</p>
        <p>At viverra lectus tincidunt sed duis cursus aliquam. Vive rra auctor adipiscing.consec tetur adipiscing elit. At vive rra lectus tincidunt sed duis cursus aliquam.a auctor adipiscing.</p>
    </div>

</section> --}}
<div class="container mt-4 pt-4">
    <div class="row mt-4">
        <div class="col-lg-6 col-md-5">
            <div class="video-box" style="background-image: url('{{ asset('images/about_chuzi.png') }}')">
                <span class="video-btn">
                    <i class="fa fa-play"></i>
                </span>
            </div>
        </div>
        <div class="col-lg-6 col-md-7">
            <div class="chuzi">
                <div class="title pt-4">
                    <h3>#Chuzilimekubali</h3>
                </div>
                <div class="row mt-5 chuzi-body">
                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. At viverra lectus tincidunt sed duis cursus aliquam. Viverra auctor adipiscing.dolor sit amet, consec tetur adipiscing elit. At viverra lectus tincidunt sed duis cursus aliquam. Viverra auctor adipiscing.dolor sit amet, consec tetur adipiscing elit. At viverra lectus tincidunt sed duis cursus aliquam. Viverra auctor adipiscing.</p>
                    <p class="mt-2">At viverra lectus tincidunt sed duis cursus aliquam. Vive rra auctor adipiscing.consec tetur adipiscing elit. At vive rra lectus tincidunt sed duis cursus aliquam.a auctor adipiscing.</p>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <img src="{{ asset('images/avatar.png') }}">
                    </div>
                    <div class="col mt-4 subtitle">
                        <h4>Vincent Luggerius</h4>
                        <p>Manager NCBA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
