<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\book_authors;
use App\Models\books;
use App\Models\prices;
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
        $books = books::where('is_active',1)->get();
        foreach ($books as $book) {
            $book->categories;
            $book->prices;
            $book->book_languages;
            $book->publishers;
            $book_authors = $book->book_authors;
            foreach($book_authors as $book_author){
                $book_author->authors;
            }
        }
        return ['books'=>$books];
    }

    public function get_basic()
    {
        $books = books::where('is_active',1)->get();
        return ['books'=>$books];
    }

    public function search(Request $request) {
        if($request->category_id == 0 || !$request->category_id) {
            $books = books::where('is_active', 1)->where('book_name', 'LIKE', '%'.$request->book_name.'%')->get();
            foreach ($books as $book) {
                $book->categories;
                $book->prices;
                $book->book_languages;
                $book->publishers;
                $book->authors;
            }
        }
        else {
            $books = books::where('is_active', 1)->where('book_name', 'LIKE', '%'.$request->book_name.'%')->where('categoryID', $request->category_id)->get();
            foreach ($books as $book) {
                $book->categories;
                $book->prices;
                $book->book_languages;
                $book->publishers;
                $book->authors;
            }
        }
        return $books;
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
        $date = new Datetime();
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
        $db->genres=$request->genres;
        $db->quantity=$request->quantity;
        $db->publish_date= date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $request->publish_date)));
        // $db->publish_date=$request->publish_date;
        $db->publisherID=$request->publisherID;
        $db->type=$request->type;
        $db->weight = $request->weight; 
        $db->is_active = 1; 
        $db->created_at = $date;
        $db->save();

        foreach($request["book_author_tmp"] as $author){
            $db_book_author = new book_authors();
            $db_book_author->bookID = $db->id;
            $db_book_author->authorID = $author["authorID"];
            $db_book_author->save();
        }
        $db->addprice($db->id,$request->price,$date); 
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
        $books->categories;
        $books->prices;
        $books->book_languages;
        $books->publishers;
        $books->authors;
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
        $newDate = new DateTime();
        $date = date('Y-m-d', strtotime(str_replace('-', '/', $newDate->format('Y-m-d'))));
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
        $db->quantity=$request->quantity;
        $db->genres=$request['genres'];
        // $db->publish_date=$request->publish_date;
        $db->publish_date= date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $request->publish_date)));
        $db->publisherID=$request->publisherID;
        $db->type=$request->type;
        $db->weight = $request->weight; 
        $db->save();

        book_authors::where('is_active',1)->where('bookID',$id)->delete();

        foreach($request["book_author_tmp"] as $author){
            $db_book_author = new book_authors();
            $db_book_author->bookID = $db->id;
            $db_book_author->authorID = $author["authorID"];
            $db_book_author->save();
        }

        $db->updateprice($id,$request->price,$date);

        $book_authors = $db->book_authors;
            foreach($book_authors as $book_author){
                $book_author->authors;
        }
        return $book_authors;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = books::findOrFail($id);
        $db->is_active=0;
        $db->save();
        return "Deleted";
    }
}
