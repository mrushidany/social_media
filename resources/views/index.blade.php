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
<section class="welcome">
    <div class="row">
        <ul id="all_slides">
            <li class="slide active"></li>
            <li class="slide"></li>
          </ul>
    </div>
</section>

<!-- Welcome section ends -->


@endsection
