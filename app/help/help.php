<?php


use Request;

function getSetting($sitesetting = 'sitename'){
 return \App\SiteSitting::where('namesitting',$sitesetting)->get()->first()->value;
}

function checkimage($imagename){

    if($imagename != ''){
        $path = base_path().'/public/website/bu_image/'.$imagename;
        if(file_exists($path)){
            return  Request::root().'/website/bu_image/'.$imagename;
        }
    }
}
function bu_array(){
    $array = [
        'Maison',
        'villa',
        'Challe',
    ];
    return $array;
}

function bu_type(){
    $array = [
        'Vente',
        'loyer',

    ];
    return $array;
}

function bu_status(){
    $array = [
        'Active',
        'Inactive',

    ];
    return $array;
}

function bu_rooms(){
    $array = [];
    for ($i = 0 ;$i<=20 ;$i++){
        $array[] = $i;
    }
    return $array;
}