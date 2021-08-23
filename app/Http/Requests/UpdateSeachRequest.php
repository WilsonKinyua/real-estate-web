<?php

namespace App\Http\Requests;

use App\Models\Seach;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSeachRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('seach_edit');
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
