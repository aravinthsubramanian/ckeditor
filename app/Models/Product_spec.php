<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_spec extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_id',
        'specifications',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
