<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konten extends Model
{
    use HasFactory;
    protected $table = "konten";
    protected $fillable = [
        'name',
        'category_konten',
        'description',
        'image_path'
    ];
}


