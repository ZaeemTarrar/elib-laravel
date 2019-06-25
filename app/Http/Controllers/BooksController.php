<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;
use App\Http\Resources\Book as BookResource;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Get books
         $book = Book::paginate(15);
         // return collection of grade as resource
         return BookResource::collection($book);
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
        $book = $request->isMethod('put') ? Book::findOrFail($request->book_id) : new Book;

        $book->id = $request->input('book_id');
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->file = $request->input('file');
        $book->references = $request->input('references');
        $book->active = $request->input('active');
        $book->category_id = $request->input('category_id');
        $book->grade_id = $request->input('grade_id');

        if($book->save())
        {
            return new BookResource($book);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return new BookResource($book);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        if($book->delete())
        {
            return new BookResource($book);
        }
    }

    public function activation(Request $request)
    {
        $book = $request->isMethod('put') ? Book::findOrFail($request->book_id) : new Book;

        $book->id = $request->input('book_id');
        $book->active =  $request->input('active');

        if($book->save())
        {
            return new BookResource($book);
        }
    }
}
