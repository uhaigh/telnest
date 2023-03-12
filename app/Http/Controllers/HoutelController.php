<?php

namespace App\Http\Controllers;

use App\Models\Houtel;
use Illuminate\Http\Request;

class HoutelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houtels = Houtel::all();
        return view('houtel.index', compact('houtels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('houtel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $houtel = new Houtel;      
        $houtel->cities_id = $request->cities_id;
        $houtel->addres = $request->addres;
        $houtel->about = $request->about;
        $houtel->facility= $request->facility;
        $houtel->photo = 'photo.jpg';
        $houtel->recommendation	 = $request->recommendation;
        $houtel->save();
        
        return redirect('/houtel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Houtel $houtel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Houtel $houtel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Houtel $houtel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Houtel $houtel)
    {
        //
    }
}
