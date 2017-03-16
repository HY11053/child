<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
           'title'=>'required|max:50|min:5',
            'shorttitle'=>'required|max:50',
            'tags'=>'required|max:100',
            'ismake'=>'required|numeric',
            'published_at'=>'date',
            'mid'=>'numeric',
            'body'=>'required',
            'image'=> 'mimes:jpeg,jpg,gif,bmp,png|image'
        ];
    }
}
