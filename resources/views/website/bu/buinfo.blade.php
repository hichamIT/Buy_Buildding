@extends('layouts.app')

@section('title')
    Building {{$busingle->bu_name}}
@endsection

@section('header')
    {!! Html::style('cus/all.css') !!}
@endsection

@section('content')

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
           @include('website.bu.side')
            <div class="col-md-9">

                <div class="profile-content">
                    <h1>{{$busingle->bu_name}}</h1>
                    <br>
                    <span>Prix : {{$busingle->bu_price}}</span>
                    <br>
                    <span>Rent : {{bu_type()[$busingle->bu_rent]}}</span>
                    <br>
                    <span>Square : {{$busingle->bu_square}}</span>
                    <br>
                    <span>Type : {{bu_array()[$busingle->bu_type]}}</span>

                    <h1>Location</h1>

                    <div id="googleMap" style="width:100%;height:400px;"></div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>

@endsection
@section('footer')
                <script>
                    function myMap() {
                        var mapProp= {
                            center:new google.maps.LatLng(51.508742,-0.120850),
                            zoom:5,
                        };
                        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

 @endsection
