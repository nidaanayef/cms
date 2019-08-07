<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RealestateRequest extends FormRequest
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
            'title'=>'required',
            'price'=>'required',
            'date'=>'required',
            'details'=>'required',
            'cities_id'=>'required',
            'categories_id'=>'required',
            'types_id'=>'required',
            'photos_id'=>'required',
            'paths'=>'required',
            'kitchens'=>'required',
            'living_room'=>'required',
            'area'=>'required',
            'address'=>'required',
            'beds'=>'required'
          
            
        ];
    }
}