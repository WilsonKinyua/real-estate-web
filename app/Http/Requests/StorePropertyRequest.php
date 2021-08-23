<?php

namespace App\Http\Requests;

use App\Models\Property;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePropertyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('property_create');
    }

    public function rules()
    {
        return [
            'property_title' => [
                'string',
                'required',
                'unique:properties',
            ],
            'property_description' => [
                'required',
            ],
            'type_id' => [
                'required',
                'integer',
            ],
            'rooms' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'property_price' => [
                'required',
            ],
            'per' => [
                'required',
            ],
            'year_built' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'area' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'google_map_location' => [
                'string',
                'required',
            ],
            'property_photos.*' => [
                'required',
            ],
            'property_video' => [
                'string',
                'required',
            ],
            'tags.*' => [
                'integer',
            ],
            'tags' => [
                'array',
            ],
            'available' => [
                'required',
            ],
            'location' => [
                'string',
                'required',
            ],
            'amenities.*' => [
                'integer',
            ],
            'amenities' => [
                'array',
            ],
        ];
    }
}