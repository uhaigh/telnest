<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('City.index', compact('cities'));
    }

    public function create()
    {
        return view('City.create');
    }

    public function store(Request $request)
    {
        $city = new City;
        $city->name = $request->name;
        $city->photo = 'photo.jpg';
        $city->save();
        
        return redirect('/City');

    } 

    public function show(City $city)
    {
        //
    }

    public function edit(City $city)
    {
        //
    }

    public function update(Request $request, City $city)
    {
        //
    }

    public function destroy(City $city)
    {
        //
    }
}
