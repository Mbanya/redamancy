<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'billing_first_name'=> ['required','max:25'],
            'billing_last_name'=> ['required','max:25'],
            'billing_company'=> ['nullable'],
            'billing_country' => ['required'],
            'billing_address_1'=> ['required','max:150'],
            'billing_address_2'=> ['nullable','max:150'],
            'billing_city'=> ['required','max:100'],
            'billing_state' => ['required','max:100'],
            'billing_postcode' => ['required','max:100'],
            'billing_phone'=> ['required','numeric'],
            'billing_email'=> ['required','email','max:150'],
            'order_comments'=> ['nullable'],
            'amount'=> ['required'],
            'm_payment_id'=> ['required'],
            'terms'=> ['required']
        ];
    }
}
