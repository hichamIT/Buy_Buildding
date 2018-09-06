@extends('admin.layouts.layout')

@section('title')
    Edit Building
@endsection

@section('header')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection




@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit building
        </h1>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Building  | {{$build->bu_name}}</h3>

                    {!! Form::model($build ,['route' => ['adminpanel.bu.update' , $build->id] , 'method' => 'PATCH' , 'class' => 'form-horizontal','files' => true] ) !!}
                    @include('admin.bu.form')
                    {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



@section('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>7
    <script>
        $(document).ready(function() {
            $('.jsselect').select2();
        });
    </script>

@endsection