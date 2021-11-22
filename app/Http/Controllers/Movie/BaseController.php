<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
