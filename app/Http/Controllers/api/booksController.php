<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\books;
use Illuminate\Http\Request;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return books::with('Price')->with('categories')->with('book_languages')->with('publishers')->with('authors')->get();
    }

    public function uploadFile(Request $request) {
        // return $request->file('file')->store('public');
        if(!empty($request->file('file'))) {
            $filename = time().'_'. $request->file('file')->getClientOriginalName();
            $destination = public_path('assets/img/books');
            $request->file('file')->move($destination, $filename);
        }
        return 'Success';
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(books $books)
    {
        //
    }
}
