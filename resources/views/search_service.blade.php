@extends('layouts.base')
@section('content')
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Searched Services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Searched Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>Searched <span>Services</span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div>
                <div class="container">
                    <div class="portfolioContainer">
                        @forelse ($searchServices as $service)
                            <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{ route('home.servicedetail', $service->id) }}">
                                    <div class="img-hover">
                                        <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                            alt="{{ $service->name }}" class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{ $service->name }}</h3>
                                        <hr class="separator">
                                        <p>{{ $service->tagline }}</p>
                                        <div class="content-btn"><a href="{{ route('home.servicedetail', $service->id) }}"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>{{ $service->price }}</div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <h1>No services with this name</h1>
                            </div>
                        @endforelse
                        {{ $searchServices->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
