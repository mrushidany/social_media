@extends('layouts.app')

@section('content')
<p>We are already authenticated</p>
<div class="d-flex justify-content-center">
    <a href="{{ route('instagramhashtag') }}" class="btn btn-sm btn-primary mr-3">Get Hashtag #</a>
</div>
@endsection
