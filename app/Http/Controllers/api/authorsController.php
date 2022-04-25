<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\authors;
use Illuminate\Http\Request;

class authorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return authors::all();
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
        $db = new authors();
        $db->author_name = $request->author_name;
        $db->is_active = 1;
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = authors::find($id);
        return $db;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = authors::find($id);
        $db->author_name = $request->author_name;
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        authors::findOrFail($id)->delete();
        return "Deleted";
    }
}
