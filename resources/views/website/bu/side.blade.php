<!-- SIDEBAR USERPIC -->

<div class="profile-usertitle">
    <div class="profile-usertitle-name">
        Menu
    </div>

</div>

<div class="profile-usermenu">
    {!! Form::open(['url'=>'search' , 'method'=>'get']) !!}
    <ul class="nav">
        <li>
            <label for="bu_status" class="col-md-4 control-label">Chercher</label>
            {!! Form::text('bu_price' , null , ['class'=>'form-control' , 'placeholder'=>'price']) !!}
        </li>
        <li>
            {!! Form::select('bu_rooms' ,bu_rooms(), null , ['class'=>'form-control' , 'placeholder'=>'rooms']) !!}
        </li>
        <li>
            {!! Form::select('bu_type' ,bu_array(), null , ['class'=>'form-control' ,'placeholder'=>'type']) !!}
        </li>
        <li>
            {!! Form::select('bu_rent' ,bu_type(), null , ['class'=>'form-control' , 'placeholder'=>'rent']) !!}
        </li>
        <li>
            {!! Form::text('bu_square' , null , ['class'=>'form-control' , 'placeholder'=>'square']) !!}
        </li>
        <li>
            {!! Form::submit('search' , ['class'=>'banner_btn' ]) !!}
        </li>
    </ul>
    {!! Form::close() !!}
</div>

<br>
<div class="profile-usermenu">
    <ul class="nav">
        <li class="active">
            <a href="{{url('/Showallbuilding')}}">
                <i class="glyphicon glyphicon-home"></i>
                All Building </a>
        </li>
        <li>
            <a href="{{url('/forrent/0')}}">
                <i class="glyphicon glyphicon-home"></i>
                Buy </a>
        </li>
        <li>
            <a href="{{url('/forrent/1')}}">
                <i class="glyphicon glyphicon-home"></i>
                Rent </a>
        </li>
        <li>
            <a href="{{url('/type/0')}}">
                <i class="glyphicon glyphicon-home"></i>
                Maison </a>
        </li>
        <li>
            <a href="{{url('/type/1')}}">
                <i class="glyphicon glyphicon-home"></i>
                villa </a>
        </li>
        <li>
            <a href="{{url('/type/2')}}">
                <i class="glyphicon glyphicon-home"></i>
                Challe </a>
        </li>
    </ul>
</div>
<!-- END MENU -->
</div>
</div>