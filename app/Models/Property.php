<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the property.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'payment_duration',
        'location',
        'featured_image',
        'second_image',
        'third_image',
        'fourth_image',
        'type',
        'agreement',
        'status',
        'area',
        'rooms',          
        'bedrooms',
        'bathrooms',
        'floor',
        'parking',
        'balcony',
        'air_conditioning',
        'alarm_system',
        'elevator',
        'garden',
        'barbeque',
        'furniture',
        'cable_tv',
        'internet',
        'central_heating',
        'pet_friendly',
    ];
}
