<?php

namespace App\Http\Requests;

use App\Models\OurPartner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOurPartnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('our_partner_edit');
    }

    public function rules()
    {
        return [];
    }
}
