<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Libro::all();
        
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
        $libro = new Libro;

        $libro-> title = $request->title;
        $libro-> editorial = $request->editorial;
        $libro-> author = $request->author;
        $libro-> theme = $request->theme;
        $libro-> category = $request->category;
        $libro-> save();

        return "se guardo";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            $libro = Libro::findOiFail($request->id);
            $libro-> title = $request->title;
        $libro-> editorial = $request->editorial;
        $libro-> author = $request->author;
        $libro-> theme = $request->theme;
        $libro-> author = $request->author;
        $libro-> category = $request->category;
        $libro-> save();
        
        return $libro;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $libro = Libro::destroy($request->id);
        return $libro;
    }
}
