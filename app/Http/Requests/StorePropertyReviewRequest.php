<?php

namespace App\Http\Requests;

use App\Models\PropertyReview;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePropertyReviewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('property_review_create');
    }

    public function rules()
    {
        return [
            'property_id' => [
                'required',
                'integer',
            ],
            'full_name' => [
                'string',
                'required',
            ],
            'ratings' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'email' => [
                'required',
            ],
            'review' => [
                'required',
            ],
        ];
    }
}
