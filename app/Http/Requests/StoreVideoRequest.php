<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreVideoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'youtube_id' => 'required',
//        'youtube_id' => 'required|unique:videos,youtube_id',
            'slug' => 'required',
            'title' => 'required',
            'category_id' => 'required',
        ];
    }
}
