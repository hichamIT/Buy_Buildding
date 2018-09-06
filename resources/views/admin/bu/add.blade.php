@extends('admin.layouts.layout')

@section('title')
    Add Building
@endsection

@section('header')

@endsection




@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Building
        </h1>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New Building </h3>

                        {!! Form::open( ['url' => '/adminpanel/bu' , 'method' => 'POST' , 'class'=>'form-horizontal' , 'files' => true ] ) !!}
                        @include('admin.bu.form')
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection










@section('footer')

@endsection