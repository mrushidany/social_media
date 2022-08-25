@extends('layouts.app')

@section('content')
<!-- header section starts -->
<header class="header">
    <section class="flex">
        <a href="" class="logo">
            <img src="{{ asset('images/ncba_mpawa.png') }}" alt="">
        </a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About companion</a>
            {{-- <a href="#how">How to participate</a> --}}
            <a href="#testimonials">Testimonials</a>
            <a href="#contestors">Contestors</a>
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
<div class="container mt-4 pt-4" id="about">
    <div class="row mt-4">
        <div class="col-lg-6 col-md-5">
            <div class="video-box" style="background-image: url('{{ asset('images/about_chuzi.png') }}')">
                <span class="video-btn">
                    <i class="fa fa-play"></i>
                </span>
            </div>
        </div>
        <div class="col-lg-6 col-md-7">
            <div class="chuzi pt-3">
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
    <div class="chuzi-background">
        <img src="{{ asset('images/chuzi-bg.png') }}" alt="">
    </div>
</div>
<!-- about section ends -->

 <!-- How to participate section starts -->
 {{-- <div class="container participate-section" id="how">
    <div class="row">
        <h2>How to <span style="color: #3AB3E5">Participate</span></h2>
        <div class="col-md-6 mt-4 pt-4">
            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis varius tortor dolor eu. Adipiscing nisl at adipiscing ut.</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">

        </div>
    </div>
 </div> --}}
<!-- How to participate section ends -->

<!-- Word from winners section starts -->
<section class="winners mt-5" id="testimonials">
    <div class="container">
       <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4">Word from our <span style="color: #3AB3E5;">Winners</span></h3>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis varius tortor dolor eu. Adipiscing nisl at adipiscing ut.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 lr">
                <div class="focus" style="background-image: url('{{ asset('images/boda.png') }}')">
                    <div class="inner-focus">
                        <div class="focus-icon">
                            <span style="color: #392B27;">
                            <i class="fa fa-play play"></i>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 lr">
                <div class="focus" style="background-image: url('{{ asset('images/sokoni_1.png') }}')">
                    <div class="inner-focus">
                        <div class="focus-icon">
                            <span style="color: #392B27;">
                            <i class="fa fa-play play"></i>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 lr">
                <div class="focus" style="background-image: url('{{ asset('images/sokoni_2.png') }}')">
                    <div class="inner-focus">
                        <div class="focus-icon">
                            <span style="color: #392B27;">
                            <i class="fa fa-play play"></i>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=""></div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="slide">
                <img src="{{ asset('images/blue-fill.png') }}" >
                <img src="{{ asset('images/fill.png') }}" >
                <img src="{{ asset('images/fill.png') }}" >
                <img src="{{ asset('images/fill.png') }}" >
            </div>
        </div>
    </div>
</section>
<!-- Word from winners section ends -->

<!-- Chuzi Challenge section starts -->
<div class="container pt-0 participate-section mb-3" id="contestors">
    <div class="row">
        <h2>Chuzi <span style="color: #3AB3E5">Challenge</span></h2>
        <div class="col-md-6 mt-3 pt-4">
            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis varius tortor dolor eu. Adipiscing nisl at adipiscing ut.</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/mary_av.png') }}"><span class="name">Mary Shirima</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/1.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/john_av.png') }}"><span class="name">John Kilaza</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/2.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/david_av.png') }}"><span class="name">David Jicho</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/3.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/david_av.png') }}"><span class="name">Zuberi Hassan</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/4.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/mary_av.png') }}"><span class="name">Diane Joseph</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/5.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/mary_av.png') }}"><span class="name">Aneth Majaliwa</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/6.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/mary_av.png') }}"><span class="name">Amina Zuberi</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/7.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/kev_av.png') }}"><span class="name">Kelvin Shirima</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/8.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/mary_av.png') }}"><span class="name">Sisti Ngosha</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/9.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/mary_av.png') }}"><span class="name">Nadia Massawe</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/10.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/david_av.png') }}"><span class="name">Ngosha Ngosha</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/11.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-3 social-card">
                <div class="card-body">
                    <div class="heading">
                        <img src="{{ asset('images/john_av.png') }}"><span class="name">Meku Muha</span>
                    </div>
                    <div class="body">
                        <img src="{{ asset('images/challenge/2.png') }}" >
                    </div>
                    <div class="likes">
                        <i class="fa-solid fa-heart"></i><span style="margin-left: 0.8rem">5.4k</span>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<!-- Chuzi Challenge section ends -->


<!-- footer section starts -->
<section class="footer mt-5">
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('images/ncba_mpawa_white.png') }}" alt="NCBA MPAWA"/>
        </div>

        <div class="box">
            <h3>Support</h3>
            <div class="footer-nav">
                <ul>
                    <li><a href="">Terms & Conditions</a> </li>
                    <li><a href="">Questions</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>
            </div>
        </div>

        <div class="box">
            <h3>Other Links</h3>

        </div>

        <div class="box">
            <h3>Follow us on:</h3>
            <div class="row social-links">
                <img src="{{ asset('images/icons/facebook.png') }}">
                <img src="{{ asset('images/icons/twitter.png') }}">
                <img src="{{ asset('images/icons/instagram.png') }}">
                <img src="{{ asset('images/icons/linkedin.png') }}">
            </div>
        </div>
    </div>
</section>

<!-- footer section ends -->


@endsection
