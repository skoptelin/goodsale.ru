<?php

namespace App\Http\Controllers;

use App\Models\ad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ads = DB::table('ads')
                ->join('users', 'users.id', '=', 'ads.user_id')
                ->select('ads.id', 'ads.title', 'ads.description', 'ads.price', 'ads.picture', 'users.name', 'users.phone_num', 'ads.city')
                ->orderBy('ads.updated_at', 'desc')
                ->get();
        return view('ads/index', [
            'activeAds' => $ads
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
    public function store(){

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(ad $ad){
        return view("ads/showAd", [ "activeAd" => $ad ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(ad $ad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(ad $ad)
    {
        //
    }
}
