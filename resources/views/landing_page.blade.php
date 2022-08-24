@extends('layouts.app')

@section('content')
<div class="header">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-2 col-md-4 col-6">
                <a class="logo" href="">
                    <img src="{{ asset('images/ncba_mpawa.png') }}" alt="NCBA MPAWA">
                </a>
            </div>
            <div class="col-lg-1 col-md-1 col-6">
                <div style="text-align:right">
                    <span class="menu"><i class="fa fa-bars"></i></span>
                </div>
            </div>
            <div class="col-lg-9 col-md-7 col-sm-12">
                <div class="navigations">
                    <ul class="navs">
                        <li><a href="">Home</a></li>
                        <li><a href="">About Campaign</a></li>
                        <li><a href="">How to participate</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">Contestors</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="welcome">

</section>



@endsection
