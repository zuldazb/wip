<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Consumption;
use App\Models\Forecast;
use App\Models\Spk;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index', [
            'title' => 'Article',
            'articles' => Article::all()
        ]);
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
    public function show($article)
    {

        $consumptions = Consumption::with('spk', 'fabric', 'article')
            ->whereHas('article', function ($query) use ($article) {
                $query->where('partnumber', '=', $article);
            })->get();

        // $forecasts = Forecast::with('article')->limit(5)->get();
        $forecasts = Forecast::with('article')
            ->whereHas('article', function ($query) use ($article) {
                $query->where('partnumber', '=', $article);
            })->get();

        $article = Article::where('partnumber', '=', $article)->first();

        // @dd($forecasts);

        return view('articles.show', [
            'title' => 'Article',
            'consumptions' => $consumptions,
            'forecasts' => $forecasts,
            'article' => $article,
        ]);
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
