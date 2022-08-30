@extends('layouts.app')

@section('content')

@auth
<p>We are already authenticated</p>
<div class="d-flex justify-content-center">
    <a href="{{ route('instagramhashtag') }}" class="btn btn-sm btn-primary mr-3">Get Hashtag #</a>
</div>
@endauth
<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mt-24">
    <a class="btn btn-primary mr-5" style="background-color: #3b5998; margin-right: 2rem;" href="{{ route('facebooklogin') }}" role="button"><i class="fab fa-facebook-f"></i></a>
</div>

@endsection
