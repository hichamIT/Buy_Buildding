@extends('admin.layouts.layout')

@section('title')
    Add User
@endsection

@section('header')

@endsection




@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add User
        </h1>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New User</h3>
                    </div>

                        {!! Form::open( ['url' => '/adminpanel/users' , 'method' => 'POST'] ) !!}
                        @include('admin.user.form')
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@endsection










@section('footer')

@endsection