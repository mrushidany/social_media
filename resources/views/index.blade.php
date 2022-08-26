@extends('layouts.main')

@section('content')
{{-- Navbar section --}}
<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/app/ncba_mpawa.png') }}" alt="NCBA MPAWA - Chuzi Limekubali">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about_companion">About companion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#how_to_participate">How to participate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contestors">Contestors</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endsection
