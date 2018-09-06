<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $table = 'bu';

    protected $fillable = [

        'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type', 
        'bu_smal_desc', 'bu_meta', 'bu_langitude', 'bu_lantitude', 
        'bu_large_des', 'bu_status','bu_image','bu_rooms', 'user_id'
    ];

}
