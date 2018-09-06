<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BuRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bu_name' =>'required|min:5|max:100',
            'bu_price' =>'required',
            'bu_rent' =>'required|integer',
            'bu_square' =>'required|min:1|max:10',
            'bu_type' =>'required|integer',
            'bu_smal_desc' =>'required|min:5|max:160',
            'bu_meta' =>'required|min:5|max:200',
            'bu_langitude' =>'required',
            'bu_lantitude' =>'required',
            'bu_large_des' =>'required|min:5',
            'bu_status' =>'required|integer',
            'bu_image' => 'required|mimes:png,jpg,jpeg',
            'bu_rooms' =>'required|integer',
        ];
    }
}
