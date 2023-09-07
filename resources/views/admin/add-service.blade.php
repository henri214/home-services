@extends('layouts.base')
@section('content')
    <div>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Add New Service Category</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Add New Service Category</li>
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
                                                Add New Service Category
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.services') }}" class="btn btn-info pull-right">All
                                                    Services</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form method="POST" action='{{ route('admin.addservice') }}'
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="control-label col-sm-3">Service Name :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="slug" class="control-label col-sm-3">Service Slug :</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="slug">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tagline" class="control-label col-sm-3">Service
                                                    tagline:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tagline">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="service_category_id" class="control-label col-sm-3">Service
                                                    category:</label>
                                                <div class="col-sm-9">
                                                    <select name="service_category_id" id="service_category_id"
                                                        class="form-control">
                                                        <option value="">Select Service Category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="price" class="control-label col-sm-3">Service
                                                    price:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="price">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="discount" class="control-label col-sm-3">Service
                                                    discount:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="discount">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="discount_type" class="control-label col-sm-3">Type of
                                                    discount:</label>
                                                <div class="col-sm-9">
                                                    <select name="discount_type" id="discount_type" class="form-control">
                                                        <option value="">Select Discount Type</option>
                                                        <option value="fixed">Fixed</option>
                                                        <option value="percentage">percentage</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label col-sm-3">Service
                                                    description:</label>
                                                <div class="col-sm-9">
                                                    <textarea name="description" id="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inclusion" class="control-label col-sm-3">Service
                                                    inclusion:</label>
                                                <div class="col-sm-9">
                                                    <textarea name="inclusion" id="inclusion"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exclusion" class="control-label col-sm-3">Service
                                                    exclusion:</label>
                                                <div class="col-sm-9">
                                                    <textarea name="exclusion" id="exclusion"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="thumbnail" class="control-label col-sm-3">Service
                                                    thumbnail:</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" name="thumbnail">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image" class="control-label col-sm-3">Service
                                                    Image:</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success pull-right">Create</button>
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
