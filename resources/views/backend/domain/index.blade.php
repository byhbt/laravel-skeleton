@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody><tr>
                            <th style="width: 10px">#</th>
                            <th>{{_('Name')}}</th>
                            <th>{{_('Url')}}</th>
                            <th>{{_('Is Main')}}</th>
                            <th>{{_('Is activated')}}</th>
                            <th style="width: 40px">{{ _('Action') }}</th>
                        </tr>
                        <!-- Your Page Content Here -->
                        @forelse($domains as $domain)
                        <tr>
                            <td>{{ $domain->id }}</td>
                            <td>{{ $domain->name }}</td>
                            <td>{{ $domain->url }}</td>
                            <td>{{ $domain->is_main }}</td>
                            <td>{{ $domain->is_activated }}</td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5">{{ _('No record has been found') }}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
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