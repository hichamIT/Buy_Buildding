@extends('admin.layouts.layout')

@section('title')
    Site Setting | {{getSetting()}}
@endsection

@section('header')

@endsection




@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Site Setting
        </h1>
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Setting</h3>
                    </div>
                    {!! Form::open( ['url' => '/adminpanel/sitesetting' , 'method' => 'POST'] ) !!}

                    @foreach($sitesetting as $seting)
                    <div class="form-group{{ $errors->has($seting->namesitting) ? ' has-error' : '' }}">

                        <div class="col-md-10">
                            <div class="clo-md-2">
                                {{$seting->slug}}
                            </div>
                            @if($seting->type == 0)
                            {!! Form::text($seting->namesitting , $seting->value , ['class'=>'form-control']) !!}
                            @else
                            {!! Form::textarea($seting->namesitting , $seting->value , ['class'=>'form-control']) !!}
                            @endif

                            @if ($errors->has($seting->namesitting))
                                <span class="help-block">
                                        <strong>{{ $errors->first($seting->namesitting) }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    @endforeach

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" name="submit" class="btn btn-app">
                                    <i class="fa fa-save"></i>
                                    Enregister
                                </button>
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@endsection

