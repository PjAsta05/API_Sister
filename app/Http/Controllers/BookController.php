<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->save();

        return $book;
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $title = $request->title;
        $author = $request->author;
        $year = $request->year;

        $book = Book::find($id);
        $book->title = $title;
        $book->author = $author;
        $book->year = $year;
        $book->save();
        
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $book = Book::find($id);
        $book->delete();

        return Book::all();
    }
}
