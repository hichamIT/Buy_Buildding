<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSitting extends Model
{
    protected $table = 'siteSitting';

    protected  $fillable = [

        'id', 'slug', 'namesitting', 'value', 'type'
    ];
}
