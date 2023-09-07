@extends('layouts.base')
@section('content')
    <div>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Profile</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-8 col-md-offset-2 profile1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6">
                                                Profile
                                            </div>
                                            <div class="col-md-6">
                                                {{-- <a href="{{ route('admin.service_categories') }}"
                                                    class="btn btn-info pull-right">All Categories</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                @if ($svp->image)
                                                    <img src="{{ asset('images/svp') }}/{{ $svp->image }}" width="100%"
                                                        alt="{{ $svp->name }}">
                                                @else
                                                    <img src="{{ asset('images/svp/profile.png') }}"
                                                        alt="{{ $svp->name }}">
                                                @endif
                                            </div>
                                            <div class="col-md-8">
                                                <h3>Name : {{ Auth::user()->name }}</h3>
                                                <p>{{ $svp->about }}</p>
                                                <p><b>Email : </b>{{ Auth::user()->email }}</p>
                                                <p><b>Phone : </b>{{ Auth::user()->phone }}</p>
                                                @if ($svp->service_category_id)
                                                    <p><b>Service Provider Category : </b>{{ $svp->category->name }}</p>
                                                @endif
                                                <p><b>Service Provider Locations : </b>{{ $svp->service_locations }}</p>
                                                <p><b>Service Provider City : </b>{{ $svp->city }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
