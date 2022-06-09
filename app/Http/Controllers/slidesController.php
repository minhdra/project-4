<?php

namespace App\Http\Controllers;

use App\Models\slides;
use Illuminate\Http\Request;

class slidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = slides::where('is_active', 1)->get();
        return ['slides'=>$slides];
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
        $db = new slides();
        $db->link = $request->link;
        $db->image = $request->image;
        $db->sort_order = $request->sort_order;
        $db->is_active = 1;
        $db->save();
        return $db;
    }

    public function uploadFile(Request $request)
    {
        $data = $request->file('file');
        $filename = $request->file('file')->getClientOriginalName();
        $path = public_path('/assets/img/slides/');
        $data->move($path, $filename);
        return response()->json([
            'success' => 'done',
            'valueimg' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = slides::find($id);
        return $db;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = slides::find($id);
        $db->link = $request->link;
        $db->image = $request->image;
        $db->sort_order = $request->sort_order;
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = slides::findOrFail($id);
        $db->is_active = 0;
        $db->save();
        return "Deleted";
    }
}
