@extends('layouts.base')
@section('content')
    <div>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit Service Category</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Edit Service Category</li>
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
                                                Edit Service Category
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.service_categories') }}"
                                                    class="btn btn-info pull-right">All Categories</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form method="POST"
                                            action='{{ route('admin.service_categories_update', $serviceCategory->id) }}'
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group">
                                                <label for="name" class="control-label col-sm-2">Category Name :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"
                                                        value="{{ $serviceCategory->name }}" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="slug" class="control-label col-sm-2">Category Slug :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"
                                                        value="{{ $serviceCategory->slug }}" name="slug">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image" class="control-label col-sm-2">Category Image:</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control"
                                                        value="{{ $serviceCategory->image }}" name="image">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success pull-right">Update</button>
                                        </form>
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
