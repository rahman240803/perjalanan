<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\perjalanan;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanan = perjalanan::where('user_id', Auth()->user()->id)->get();
        return view('profile.index', compact('perjalanan'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        perjalanan::create([
         'tgl_perjalanan' => $request->tgl_perjalanan,
         'jam' => $request->jam,
         'lokasi' => $request->lokasi,
         'suhu_tubuh' => $request->suhu_tubuh,
         'user_id' => Auth::user()->id,
        ]);        
        return redirect('/profile');
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
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(perjalanan $perjalanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit(perjalanan $perjalanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\perjalanan  $perjalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perjalanan $perjalanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\perjalanan  $perjalan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perjalanan = \App\perjalanan::find($id);
        $perjalanan->delete();
        return redirect('/perjalanan')->with('sabi','HILANG DITELAN AYANG<3'); 
    }
}
