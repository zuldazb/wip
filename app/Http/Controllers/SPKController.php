<?php

namespace App\Http\Controllers;

use App\Models\Consumption;
use App\Models\Spk;
use Illuminate\Http\Request;

class SPKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $spk = SPK::all();
        // dd($spk);   
        return view('spk_s.index', [
            'spks_s' => Spk::with('forecast', 'makloon')->get(),
            'title' => 'SPK'
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
    public function show($spk)
    {
        $consumptions = Consumption::with('spk', 'fabric', 'article')
            ->whereHas('spk', function ($query) use ($spk) {
                $query->where('no_spk', '=', $spk);
            })->get();

        // $consumptions = Consumption::with('spk', 'fabric', 'article')->get();
        $consumptions = $consumptions->map(function ($item, $key) use ($spk) {
            $spks = SPK::where('no_spk', '=', $spk)->first();
            $item->total_s = $item->cons_s * $spks->spk_s;
            $item->total_m = $item->cons_m * $spks->spk_m;
            $item->total_l = $item->cons_l * $spks->spk_l;
            $item->total_xl = $item->cons_xl * $spks->spk_xl;
            $item->total_2xl = $item->cons_2xl * $spks->spk_2xl;
            $item->total_3xl = $item->cons_3xl * $spks->spk_3xl;
            return $item;
        });


        // dd($consumptions);


        $spk_s = SPK::with('forecast', 'consumptions')->where('no_spk', '=', $spk)->get();
        return view('spk_s.show', [
            'spks' => $spk_s,
            'consumptions' => $consumptions,
            'title' => 'SPK'
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
