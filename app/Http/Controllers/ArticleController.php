<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
            'articles' => Article::all(),
            'title' => 'Article'
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
    public function show(Article $article)
    {
        // $consumptions = Consumption::with('spk', 'fabric', 'article')
        //     ->whereHas('spk', function ($query) use ($spk) {
        //         $query->where('no_spk', '=', $spk);
        //     })->get();

        dd($article);

        // $consumptions = Consumption::latest()->filter(request(['spk']))->limit(5)->get();
        // @dd($consumptions);
        // dd($consumptions);
        // $spk_s = SPK::with('forecast', 'consumptions')->where('no_spk', '=', $spk)->get();
        // return view('spk_s.show', [
        //     'spks' => $spk_s,
        //     'consumptions' => $consumptions,
        //     'title' => 'SPK'
        // ]);
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
