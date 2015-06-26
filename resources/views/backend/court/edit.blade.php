@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit court</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <form role="form" action="{{ route('backend.court.update', $court->id) }}" method="post" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user_id" value="1">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name', $court->name) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Slug</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('slug', $category->slug) }}" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-get-slug" type="button">Get Slug</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{ old('phone', $court->phone) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" id="address" class="form-control textarea" cols="30" rows="10">{{ old('address', $court->address) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="open_hour" class="col-sm-2 control-label">Open hours</label>
                                <div class="col-sm-10">
                                    <input type="text" name="open_hour" class="form-control" id="open_hour" placeholder="Open hour" value="{{ old('open_hour', $court->open_hour) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="{{ old('price', $court->price) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website" class="col-sm-2 control-label">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="website" class="form-control" id="website" placeholder="Website" value="{{ old('website', $court->website) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="facebook" class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Facebook" value="{{ old('facebook', $court->facebook) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" class="form-control textarea" cols="30" rows="10">{{ old('description', $court->description) }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
