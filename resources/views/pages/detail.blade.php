@extends('layouts.app')
@section('tittle', 'Detail Travel')
@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.min.css') }}">
@endpush
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>Republic of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ url('frontend/images/detail1.jpg') }}" class="xzoom" id="xzoom-default" xoriginal="{{ url('frontend/images/detail1.jpg') }}" width="650px">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{ url('frontend/images/detail1.jpg') }}">
                                    <img src="{{ url('frontend/images/detail1.jpg') }}" class="xzoom-gallery" width="120" xpreview="{{ url('frontend/images/detail1.jpg') }}">
                                </a>
                                <a href="{{ url('frontend/images/detail2.jpg') }}">
                                    <img src="{{ url('frontend/images/detail2.jpg') }}" class="xzoom-gallery" width="120" xpreview="{{ url('frontend/images/detail2.jpg') }}">
                                </a>
                                <a href="{{ url('frontend/images/detail1.jpg') }}">
                                    <img src="{{ url('frontend/images/detail1.jpg') }}" class="xzoom-gallery" width="120" xpreview="{{ url('frontend/images/detail1.jpg') }}">
                                </a>
                                <a href="{{ url('frontend/images/detail4.jpg') }}">
                                    <img src="{{ url('frontend/images/detail4.jpg') }}" class="xzoom-gallery" width="120" xpreview="{{ url('frontend/images/detail4.jpg') }}">
                                </a>
                                <a href="{{ url('frontend/images/detail2.jpg') }}">
                                    <img src="{{ url('frontend/images/detail2.jpg') }}" class="xzoom-gallery" width="120" xpreview="{{ url('frontend/images/detail2.jpg') }}">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa facere enim perferendis velit sunt? Iure sequi veniam, totam fuga amet facere. Iste nostrum qui dignissimos accusamus voluptatum. Laborum sint reiciendis error nobis est doloremque commodi, sit quam hic totam ipsa, labore sed dolorum eos ipsam. Autem quidem distinctio est labore?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dolor.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="frontend/images/ic_ticket.jpg" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-start">
                                <div class="description">
                                    <img src="frontend/images/ic_language.jpg" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-start">
                                <div class="description">
                                    <img src="frontend/images/ic_foods.jpg" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="member my-2">
                            <img src="frontend/images/person1.jpg" class="member-image rounded-circle me-2">
                            <img src="frontend/images/person2.jpg" class="member-image rounded-circle me-2">
                            <img src="frontend/images/person3.jpg" class="member-image rounded-circle me-2">
                            <img src="frontend/images/person4.jpg" class="member-image rounded-circle me-2">
                            <img src="frontend/images/person5.jpg" class="member-image rounded-circle me-2">
                        </div>
                        <hr>
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">22 Okt, 2021</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$80.00 / Person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container d-grid gap-2">
                        <a href="{{ route('checkout') }}" class="btn btn-join-now mt-3 px-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush