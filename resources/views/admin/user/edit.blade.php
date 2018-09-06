@extends('admin.layouts.layout')

@section('title')
    Edit User
@endsection

@section('header')

@endsection




@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit User
        </h1>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit User | {{$user->name}}</h3>
                    </div>

                    {!! Form::model($user ,['route' => ['adminpanel.users.update' , $user->id] , 'method' => 'PATCH'] ) !!}
                    @include('admin.user.form')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit User Password For | {{$user->name}}</h3>
                    </div>

                    {!! Form::open( ['url' => 'adminpanel/users/changepassword' , 'method' => 'POST'] ) !!}

                    <input type="hidden" value="{{$user->id}}" name="user_id">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i> Update Password
                            </button>
                            @if($user->id !=1)
                            <a href="{{url('/adminpanel/users/' . $user->id . '/delete')}}" class="btn btn_danger btn-circle"><i class="fa fa-trash-o"></i></a>
                            @endif

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>

@endsection










@section('footer')

@endsection