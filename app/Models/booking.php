<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'full_name',
        'place_of_birth',
        'date_of_birth',
        'passport_or_nid',
        'mobile',
        'email',
        'service_country',
        'service_subject',
        'payment_amount',
        'payment_method',
        'payment_proof',
        'terms_agreed',
    ];
}
