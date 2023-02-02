<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ad extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'picture',
        'user_id',
        'status_id'
    ];
}

