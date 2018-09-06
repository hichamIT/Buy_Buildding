@extends('admin.layouts.layout')

@section('title')
    Buillding
@endsection

@section('header')
    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection




@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users Panel
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Buildding  Infromations</h3>
                        </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="bu-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>bu_name</th>
                                        <th>bu_price</th>
                                        <th>bu_type</th>
                                        <th>bu_status</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection










@section('footer')
    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
    <script>

        $('#bu-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/adminpanel/bu/data') }}',
            columns: [
                {data: 0, name: 'id'},
                {data: 1, name: 'bu_name'},
                {data: 2, name: 'bu_price'},
                {data: 3, name: 'bu_type'},
                {data: 4, name: 'bu_status'},
                {data: 5, name: 'created_at'},
                {data: 6, name: 'action'}
            ],
            "language": {
                "url": "{{ Request::root()}}/admin/cur/Frensh.json"
            },

        });
    </script>
@endsection