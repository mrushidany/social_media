@extends('layouts.app')

@section('content')
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <p class="lead fw-normal mb-0 me-3 fs-3" >Sign in with :-</p><br />
                </div>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mt-24">
                    <a class="btn btn-primary mr-5" style="background-color: #3b5998; margin-right: 2rem;" href="{{ route('facebooklogin') }}" role="button"><i class="fab fa-facebook-f"></i></a>
                    {{-- <a class="btn btn-primary" style="background-color: #ac2bac;" href="{{ route('instagramlogin') }}" role="button"><i class="fab fa-instagram"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary"></div>
</section>


@endsection
