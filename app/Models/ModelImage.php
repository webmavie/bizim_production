<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['image', 'model_id'];
}
