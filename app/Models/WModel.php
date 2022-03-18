<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'slug', 'main_image', 'image', 'col4'];

    public function images()
    {
        return $this->hasMany(ModelImage::class, 'model_id', 'id');
    }
}
