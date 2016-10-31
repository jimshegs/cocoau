<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DonateRequest extends Request
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
            'ccnumber' => 'required',
            'ccmonth' => 'required',
            'ccyear' => 'required',
            'cvv'   => 'required',
            'authmethod' => 'required',
            'currency' => 'required',
            'amount' => 'required'
        ];
    }
}
