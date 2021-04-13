<?php

namespace App\Http\Controllers;

use App\Weather;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Weather $weather)
    {

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
     * @param  \App\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function show(Weather $weather)
    {
        $weathers=$weather::all();
        return response()->json($weathers);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function edit(Weather $weather)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weather $weather)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weather $weather)
    {
        //
    }
}
