

    <div class="form-group{{ $errors->has('bu_name') ? ' has-error' : '' }}">
        <label for="bu_name" class="col-md-4 control-label">Bu Name</label>

        <div class="col-md-6">

            {!! Form::text('bu_name' , null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_rent') ? ' has-error' : '' }}">
        <label for="bu_rent" class="col-md-4 control-label">Bu Rent</label>

        <div class="col-md-6">

            {!! Form::select('bu_rent' ,bu_type(),null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_rent') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_price') ? ' has-error' : '' }}">
        <label for="bu_price" class="col-md-4 control-label">Bu Price</label>

        <div class="col-md-6">

            {!! Form::text('bu_price' , null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_price'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_price') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_square') ? ' has-error' : '' }}">
        <label for="bu_square" class="col-md-4 control-label">Bu Square</label>

        <div class="col-md-6">

            {!! Form::text('bu_square' , null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_square'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_square') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('bu_type') ? ' has-error' : '' }}">
        <label for="bu_type" class="col-md-4 control-label">Bu type</label>

        <div class="col-md-6">

            {!! Form::select('bu_type' ,bu_array(), null , ['class'=>'form-control jsselect']) !!}

            @if ($errors->has('bu_type'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_type') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_smal_desc') ? ' has-error' : '' }}">
        <label for="bu_smal_desc" class="col-md-4 control-label">Bu Small Description</label>

        <div class="col-md-6">

            {!! Form::textarea('bu_smal_desc' , null , ['class'=>'form-control', 'rows' =>'4']) !!}

            @if ($errors->has('bu_smal_desc'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_type') }}</strong>
                </span>
            @endif
        </div>

        <span class="help-block">
            <strong>160 caracteres</strong>
        </span>

    </div>

    <div class="form-group{{ $errors->has('bu_large_des') ? ' has-error' : '' }}">
        <label for="bu_large_des" class="col-md-4 control-label">Bu large Description</label>

        <div class="col-md-6">

            {!! Form::textarea('bu_large_des' , null , ['class'=>'form-control', 'rows' =>'4']) !!}

            @if ($errors->has('bu_large_des'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_large_des') }}</strong>
                </span>
            @endif
        </div>

    </div>

    <div class="form-group{{ $errors->has('bu_meta') ? ' has-error' : '' }}">
        <label for="bu_meta" class="col-md-4 control-label">Bu Meta</label>

        <div class="col-md-6">

            {!! Form::text('bu_meta' , null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_meta'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_meta') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_langitude') ? ' has-error' : '' }}">
        <label for="bu_langitude" class="col-md-4 control-label">Bu Langitude</label>

        <div class="col-md-6">

            {!! Form::text('bu_langitude' , null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_langitude'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_langitude') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_lantitude') ? ' has-error' : '' }}">
        <label for="bu_lantitude" class="col-md-4 control-label">Bu Lantitude</label>

        <div class="col-md-6">

            {!! Form::text('bu_lantitude' , null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_lantitude'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_lantitude') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_status') ? ' has-error' : '' }}">
        <label for="bu_status" class="col-md-4 control-label">Bu Status</label>

        <div class="col-md-6">

            {!! Form::select('bu_status' ,bu_status(), null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_status'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_status') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_image') ? ' has-error' : '' }}">
        <label for="bu_image" class="col-md-4 control-label">Bu Image</label>

        <div class="col-md-6">
            @if(isset($build))
                @if($build->bu_image != '')
                    <img src="{{Request::root().'/website/bu_image/'.$build->bu_image}}" width="100">
                @endif
            @endif
                {!! Form::file('bu_image' , null , ['class'=>'form-control']) !!}
            @if ($errors->has('bu_image'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_image') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bu_rooms') ? ' has-error' : '' }}">
        <label for="bu_rooms" class="col-md-4 control-label">Bu Rooms</label>

        <div class="col-md-6">

            {!! Form::text('bu_rooms', null , ['class'=>'form-control']) !!}

            @if ($errors->has('bu_rooms'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_rooms') }}</strong>
                </span>
            @endif
        </div>
    </div>

    @if(!isset($build))
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Register
                </button>
            </div>
        </div>
    @else
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Update
                </button>
            </div>
        </div>
    @endif
