<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'mobile_image',
        'title',
        'about',
        'about_image',
        'phone',
        'whatsapp', 
        'email',
        'address',
        'facebook',
        'instagram',
        'partners',
        'our_team',
        'models',
        'model_title',
        'model_image',
        'site_description',
        'partners_title',
        'our_team_title',
    ];
    public $timestamps = false;
}
