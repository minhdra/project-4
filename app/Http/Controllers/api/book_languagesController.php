<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\book_languages;
use Illuminate\Http\Request;

class book_languagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_languages = book_languages::all();
        return ['book_languages'=>$book_languages];
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
        $db = new book_languages();
        $db->language_name = $request->language_name;
        $db->language_code = $request->language_code;
        $db->is_active = 1;
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book_languages  $book_languages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = book_languages::find($id);
        return $db;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book_languages  $book_languages
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book_languages  $book_languages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = book_languages::find($id);
        $db->language_name = $request->language_name;
        $db->language_code = $request->language_code;
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book_languages  $book_languages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        book_languages::findOrFail($id)->delete();
        return "Deleted";
    }
}
