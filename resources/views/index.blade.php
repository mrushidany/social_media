@extends('layouts.main')

@section('content')
<!-- Navbar section starts -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/app/ncba_mpawa.png') }}" alt="NCBA MPAWA - Chuzi Limekubali">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span  class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#nyumbani">Nyumbani</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kuhusu_kampeni">Kuhusu Kampeni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#jinsi_ya_kushiriki">Jinsi ya kushiriki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ushuhuda">Ushuhuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#washiriki">Washiriki </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar section ends -->

<!-- Welcome section starts -->
<section class="welcome" id="nyumbani">
    <div class="hero">
        <ul id="all_slides">
            <li class="slide active"></li>
            <li class="slide"></li>
        </ul>
        <div class="content">
            <div class="col-md-8 col-sm-12">
                <img src="{{ asset('images/app/chuzi_limekubali.png') }}" alt="Chuzi Limekubali" class="bounce">
                <p class="mt-3">Shinda dabo ya akiba ukisevu na <span class="text-danger">M-Pawa</span></p>
            </div>
        </div>
        <div class="controls">
            <div class="control-btns">
                <div class="inner-focus">
                    <div class="focus-icon">
                        <span style="color: #392B27;">
                        <i class="fa fa-play play"></i>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome section ends -->

<!-- About section starts -->
<section class="about d-flex align-items-center" id="kuhusu_kampeni">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/app/about_chuzi.png') }}" alt="About NCBA MPAWA Chuzi Limekubali">
            </div>
            <div class="col mt-4">
                <h3 class="mt-3 mb-5">#Chuzilimekubali</h3>
                <p class="mt-3">Chuzi limekubali ukiwa na M-PAWA inayoletwa kwa ushirikiano wa Vodacom na M-PAWA. Kila unapoweka akiba, kukopa na kurejesha mkopo mapema basi unajishindia mpaka mara mbili (2) ya akiba yako. Kushinda ni rahisi sana, unapiga *150*00# unaingia kwenye MIKOPO NA AKIBA halafu unachagua M-PAWA na kufuata hatua rahisi za kuweka na kukopa.</p>
                <p class="mt-4">Jaribu leo uwe miongoni mwa washindi wa Chuzi limekubali.</p>
                <div class="row title">
                    <div class="col">
                        <img src="{{ asset('images/icons/avatar.png') }}" alt="Avatar">
                    </div>
                    <div class="col">
                        <h4>Vincent Luggerius</h4>
                        <p>Manager NCBA</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
