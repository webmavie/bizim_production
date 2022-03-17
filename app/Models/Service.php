<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'slug',
        'main_image',
        'main_description',
        'bg_image',
        'description',
        'questions_exists',
        'questions',
        'prices_exists',
        'prices',
        'included_in_cost_exists',
        'included_in_cost',
        'images_exists',
        'videos_exists',
    ];
    
    protected $casts = [
        'questions' => 'array',
        'prices' => 'array',
        'included_in_cost' => 'array',
    ];

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }
}
