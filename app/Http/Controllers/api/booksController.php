<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\books;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = books::with('Price')->with('categories')->with('book_languages')->with('publishers')->get();
        return ['books'=>$books];
    }

    public function uploadFile(Request $request) {
        $type = $request->type;
        $data = $request->file('file');
        $filename = $request->file('file')->getClientOriginalName();
        $path = ($type == 'img') ? public_path('/assets/img/books/') : public_path('/assets/pdf/');
        $data->move($path, $filename);
        return response()->json([
            'success' => 'done',
            'valueimg'=>$data ]);
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
        $db = new books();
        $db->book_name  = $request->book_name;
        $db->categoryID =$request->categoryID;
        $db->description=$request->description;
        $db->dimensions=$request->dimensions;
        $db->image=$request->image;
        $db->isnb=$request->isnb;
        $db->languageID=$request->languageID;
        $db->numpages=$request->numpages;
        $db->pdf_src=$request->pdf_src;
        $db->publish_date=$request->publish_date;
        $db->publisherID=$request->publisherID;
        $db->type=$request->type;
        $db->weight = $request->weight; 
        $db->is_active = 1; 
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = books::where('id',$id)->first();
        $book = $books->categories;
        $book = $books->Price;
        $book = $books->book_languages;
        $book = $books->publishers;
        $book = $books->authors;
        return ['book'=>$books];
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
    public function update(Request $request, $id)
    {
        $db = books::find($id);
        $db->book_name  = $request->book_name;
        $db->categoryID =$request->categoryID;
        $db->description=$request->description;
        $db->dimensions=$request->dimensions;
        $db->image=$request->image;
        $db->isnb=$request->isnb;
        $db->languageID=$request->languageID;
        $db->numpages=$request->numpages;
        $db->pdf_src=$request->pdf_src;
        $db->publish_date=$request->publish_date;
        $db->publisherID=$request->publisherID;
        $db->type=$request->type;
        $db->weight = $request->weight; 
        // $db->update_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        books::findOrFail($id)->delete();
        return "Deleted";
    }
}
