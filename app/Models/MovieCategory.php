<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieCategory extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
