<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\publishers;
use Illuminate\Http\Request;

class publishersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = publishers::all();
        return ['publishers'=>$publishers];
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
        $db = new publishers();
        $db->publisher_name = $request->publisher_name;
        $db->is_active = 1;
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = publishers::find($id);
        return $db;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = publishers::find($id);
        $db->publisher_name = $request->publisher_name;
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        publishers::findOrFail($id)->delete();
        return "Deleted";
    }
}