<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEditSiteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'web_phone_number' ,
            'web_phone_whatsapp' ,
            'web_link_whatsapp' ,
            'web_email' , 
            'plans_price_website',
            'plans_price_landingpage',
            'plans_price_ecommerce',
            'plans_price_marketing_digital' ,
        ];
    }
}
