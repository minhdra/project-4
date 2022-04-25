<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\book_authors;
use Illuminate\Http\Request;

class book_authorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $db = new book_authors();
        $db->authorID = $request->authorID;
        $db->id = $request->id;
        $db->is_active = 1;
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book_authors  $book_authors
     * @return \Illuminate\Http\Response
     */
    public function show(book_authors $book_authors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book_authors  $book_authors
     * @return \Illuminate\Http\Response
     */
    public function edit(book_authors $book_authors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book_authors  $book_authors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book_authors $book_authors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book_authors  $book_authors
     * @return \Illuminate\Http\Response
     */
    public function destroy(book_authors $book_authors)
    {
        //
    }
}
