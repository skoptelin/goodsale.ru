<?php

namespace App\Http\Controllers;

use App\Models\ad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MyAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $userId = Auth::user()->id;
        $ads = DB::table('ads')
                ->select('ads.id', 'ads.title', 'ads.description', 'ads.price', 'ads.picture')
                ->where('user_id', $userId)
                ->orderBy('ads.updated_at', 'desc')
                ->get();
        return view('ads/myAds', [
            'myAds' => $ads
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view("ads/createAd");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $userId = Auth::user()->id;
        $statusID = 3;

        $img = $request->file('picture')->store('images'); //Размещаем загруженную картинку в storage
        $imgName = substr($img, 7); //Формируем название файла для записи в БД
        
        $ad = new ad();
        $ad->title       = $request->input('title');
        $ad->description = $request->input('description');
        $ad->price       = $request->input('price');
        $ad->picture     = $imgName;
        $ad->city        = $request->input('city');
        $ad->user_id     = $userId;
        $ad->status_id   = $statusID;
        $ad->save();

        return redirect('my_ads');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
