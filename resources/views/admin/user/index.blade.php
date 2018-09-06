@extends('admin.layouts.layout')

@section('title')
    Users
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
                            <h3 class="box-title">Users Infromations</h3>
                        </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="users-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Admin</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
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

        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/adminpanel/users/data') }}',
            columns: [
                {data: 0, name: 'id'},
                {data: 1, name: 'name'},
                {data: 2, name: 'email'},
                {data: 3, name: 'email'},
                {data: 4, name: 'created_at'},
                {data: 5, name: 'updated_at'},
                {data: 6, name: 'action'}
            ],
            "language": {
                "url": "{{ Request::root()}}/admin/cur/Frensh.json"
            },

        });
    </script>
@endsection