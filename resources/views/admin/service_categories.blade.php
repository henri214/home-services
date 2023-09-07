@extends('layouts.base')
@section('content')
    <div>
        <style>
            nav svg {
                height: 20px;
            }

            nav .hidden {
                display: block !important;
            }
        </style>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Service Categories</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Service Categories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-12 profile1">
                                <div class="panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6">
                                                All Service Categories
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.add_service_categories') }}"
                                                    class="btn btn-info pull-right">Add New Service Category</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pane-body">
                                        <div class="table-responsive">
                                            <table class="table table-stripped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Slug</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sCategories as $serviceCategory)
                                                        <tr class="">
                                                            <td scope="row">{{ $serviceCategory->id }}</td>
                                                            <td>{{ $serviceCategory->name }}</td>
                                                            <td><img class="icon-img"
                                                                    src="{{ asset('images/categories') }}/{{ $serviceCategory->image }}"
                                                                    width="60" alt="{{ $serviceCategory->name }}"></td>
                                                            <td>{{ $serviceCategory->slug }}</td>
                                                            <td>
                                                                <a href="{{ route('admin.edit_service_categories', $serviceCategory->id) }}"
                                                                    class="btn btn-info btn-sm pull-right">Edit New Service
                                                                    Category</a>
                                                            </td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('admin.service_categories_delete', $serviceCategory->id) }}"
                                                                    method="Post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        {{ $sCategories->links() }}
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
