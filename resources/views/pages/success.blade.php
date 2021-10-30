@extends('layouts.success')
@section('tittle', 'Checkout Success')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/post.png') }}" alt="">
            <h3>Yay! Success</h3>
            <p>
                We've sent you email for trip instruction
                <br>
                please read it as well
            </p>
            <a href="{{ ('/') }}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>

@endsection