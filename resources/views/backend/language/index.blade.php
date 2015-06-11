@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 5%">#</th>
                                <th>{{_('Code')}}</th>
                                <th>{{_('Name')}}</th>
                                <th>{{_('Order')}}</th>
                                <th style="width: 10%">{{ _('Action') }}</th>
                            </tr>
                            <!-- Your Page Content Here -->
                            @forelse($languages as $language)
                                <tr>
                                    <td>{{ $language->id }}</td>
                                    <td>{{ $language->code }}</td>
                                    <td>{{ $language->name }}</td>
                                    <td>{{ $language->order }}</td>
                                    <td>
                                        <button type="button" class="edit-language btn btn-primary pull-right" data-id="{{ $language->id }}">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </button>
                                        <button type="button" class="delete-language btn btn-danger pull-right" style="margin-right: 5px;">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">{{ _('No record has been found.') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    <button class="btn btn-primary">
                        <i class="fa fa-plus"></i> Create
                    </button>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@stop