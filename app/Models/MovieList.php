<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieList extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'category_id',
        'type_id',
        'title',
        'orig_name',
        'slug',
        'bg_img',
        'img',
        'year',
        'country',
        'cnt_series',
        'actors',
        'description',
        'link'
    ];

    public function category()
    {
        //Жанр фильма
        return $this->belongsTo(MovieCategory::class);
    }

    public function type()
    {
        //Жанр фильма
        return $this->belongsTo(MovieType::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $casts = [
        'link' =>'json',
    ];
}
