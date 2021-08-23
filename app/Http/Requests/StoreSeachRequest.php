<?php

namespace App\Http\Requests;

use App\Models\Seach;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSeachRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('seach_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
