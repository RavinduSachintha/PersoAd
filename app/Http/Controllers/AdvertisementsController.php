<?php

namespace App\Http\Controllers;

use App\advertisements;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('pages.user-account');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advertisements = new advertisements();
        advertisements::create([
            'title'=> request('title'),
            'category'=> request('category'),
            'body' => request('body'),
            'photo' => $request->photo->getClientOriginalName(),
        ]);
        $request->file('photo')->storeAs('public/Advertisements',$request->photo->getClientOriginalName());
        
        
        return redirect('user-account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advertisements  $advertisements
     * @return \Illuminate\Http\Response
     */
    




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advertisements  $advertisements
     * @return \Illuminate\Http\Response
     */
    public function edit(advertisements $advertisements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advertisements  $advertisements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, advertisements $advertisements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advertisements  $advertisements
     * @return \Illuminate\Http\Response
     */
    public function destroy(advertisements $advertisements)
    {
        //
    }
}
