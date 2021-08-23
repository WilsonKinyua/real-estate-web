<?php

namespace App\Http\Requests;

use App\Models\OurPartner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOurPartnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('our_partner_create');
    }

    public function rules()
    {
        return [
            'logo' => [
                'required',
            ],
        ];
    }
}
