@extends('layouts.app')

@section('content')
<!-- header section starts -->
<header class="header">
    <section class="flex">
        <a href="" class="logo">
            <img src="{{ asset('images/ncba_mpawa.png') }}" alt="">
        </a>
        <nav class="navbar">
            <a href="#nyumbani">Nyumbani</a>
            <a href="#kuhusu_kampeni">Kuhusu Kampeni</a>
            <a href="#jinsi_ya_kushiriki">Jinsi ya kushiriki</a>
            <a href="#ushuhuda">Ushuhuda</a>
            <a href="#washiriki">Washiriki</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
</header>
<!-- header section ends -->

<!-- home section starts -->
<div class="home-bg" data-aos="fade-down">
    <section class="home" id="nyumbani">
        <div class="content">
            <img data-aos="fade-right" src="{{ asset('images/chuzi_limekubali.png') }}" alt="Chuzi Limekubali" class="bounce">
            <p class="mt-3">Shinda dabo ya akiba ukisevu na <span class="red">M-Pawa</span></p>
        </div>
    </section>
</div>
<!-- home section ends -->

 <!-- about section starts -->
<div class="container mt-4 pt-4" id="kuhusu_kampeni">
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
                    <p>Chuzi limekubali ukiwa na M-PAWA inayoletwa kwa ushirikiano wa Vodacom na M-PAWA. Kila unapoweka akiba, kukopa na kurejesha mkopo mapema basi unajishindia mpaka mara mbili (2) ya akiba yako. Kushinda ni rahisi sana, unapiga *150*00# unaingia kwenye MIKOPO NA AKIBA halafu unachagua M-PAWA na kufuata hatua rahisi za kuweka na kukopa.</p>
                    <p class="mt-2">Jaribu leo uwe miongoni mwa washindi wa Chuzi limekubali.</p>
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
 <div class="container participate-section" id="jinsi_ya_kushiriki">
    <div class="row">
        <h2>Jinsi ya <span style="color: #3AB3E5">Kushiriki</span></h2>
        <div class="col-md-6 mt-2 pt-4">
            <p class="">Kuwa mshindi wa Chuzi limekubali ni rahisi sana, fuata hatua chache hapo chini:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="digit"><h2>1</h2></div>
            <div class="heading">Piga *150*00#</div>
            <div class="highlight"></div>
            <p class="description">Ili kuingia moja kwa moja kwenye menu yako ya M-Pesa.</p>
        </div>
        <div class="col-md-4">
            <div class="digit"><h2>2</h2></div>
            <div class="heading">Chagua Mikopo na Akiba</div>
            <div class="highlight"></div>
            <div class="pointer"></div>
            <p class="description">Hili ni chaguo namba 5 katika menu yako.</p>
        </div>
        <div class="col-md-4">
            <div class="digit"><h2>3</h2></div>
            <div class="heading">Chagua M-PAWA</div>
            <div class="highlight"></div>
            <p class="description">Hapa utakutana na hatua rahisi za kuweka akiba na kukopa.</p>
        </div>
    </div>
 </div>
<!-- How to participate section ends -->

<!-- Word from winners section starts -->
<section class="winners mt-5" id="washiriki">
    <div class="container">
       <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4">Neno kutoka kwa <span style="color: #3AB3E5;">Washindi</span></h3>
                <p class="mt-2">Washindi wetu wana yapi ya kusema?</p>
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
            <p class="">Tukikukopesha TSh 50,000 utabusti vipi biashara na utarudishaje ndani ya siku 5? Tupe madini ule buku 5 ya fasta kwenye M-Pesa yako.</p>
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
