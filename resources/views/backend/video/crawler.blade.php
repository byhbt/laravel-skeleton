@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-5">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List of tags</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10%">#</th>
                                <th>Tag name</th>
                                <th style="width: 20%">Article</th>
                                <th style="width: 20%">Video</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Update software</td>
                                <td><span class="badge bg-light-blue">55%</span></td>
                                <td><span class="badge bg-green">55%</span></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Clean database</td>
                                <td><span class="badge bg-light-blue">70%</span></td>
                                <td><span class="badge bg-green">70%</span></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Cron job running</td>
                                <td><span class="badge bg-light-blue">30%</span></td>
                                <td><span class="badge bg-green">30%</span></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Fix and squish bugs</td>
                                <td><span class="badge bg-light-blue">90%</span></td>
                                <td><span class="badge bg-green">90%</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Youtube</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="input-group">
                            <input type="text" class="form-control">

                            <div class="input-group-btn">
                                <button type="button" class="btn btn-danger">Search</button>
                            </div>
                            <!-- /btn-group -->
                        </div>
                        <hr/>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10%">#</th>
                                <th>Title</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Update software</td>
                                <td><button type="submit" class="btn btn-primary pull-right">Add</button></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Clean database</td>
                                <td><button type="submit" class="btn btn-primary pull-right">Add</button></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Cron job running</td>
                                <td><button type="submit" class="btn btn-primary pull-right">Add</button></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Fix and squish bugs</td>
                                <td><button type="submit" class="btn btn-primary pull-right">Add</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop