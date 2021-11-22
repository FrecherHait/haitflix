<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MovieCategory;
use App\Models\MovieList;
use App\Models\MovieType;

class MovieListsController extends Controller
{
    //
    public function index()
    {
        $fields = [
            'id',
            'category_id',
            'type_id',
            'title',
            'orig_name',
            'slug',
            'img',
            'year',
            'country',
            'cnt_series',
            'actors',
            'description',
            'link'
        ];

        $paginator = MovieList::select($fields)
            ->orderBy('id', 'ASC')
            ->with(['category'])
            ->paginate(25);
        return view('movies.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = MovieList::where('slug','=',$id)->findOrFail($id);
        $categoryList = MovieCategory::all();
        return view('movie.pages.page',
            compact('item', 'categoryList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
