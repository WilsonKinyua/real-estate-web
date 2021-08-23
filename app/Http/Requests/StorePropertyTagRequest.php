<?php

namespace App\Http\Requests;

use App\Models\PropertyTag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePropertyTagRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('property_tag_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:property_tags',
            ],
        ];
    }
}
