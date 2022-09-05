<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditSite extends Model
{
    use HasFactory;

    protected $fillable = [
        'web_phone_number',
        'web_phone_whatsapp',
        'web_link_whatsapp',
        'web_email', 
        'plans_price_website',
        'plans_price_landingpage',
        'plans_price_ecommerce',
        'plans_price_marketing_digital',
        'link_facebook',
        'link_instagram',
        'link_telegram',
    ];
}
