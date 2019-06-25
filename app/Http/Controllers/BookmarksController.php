<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmark;
use App\Http\Requests;
use App\Http\Resources\Bookmark as BookmarkResource;
class BookmarksController extends Controller
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
        $bmark = $request->isMethod('put') ? Bookmark::findOrFail($request->bookmark_id) : new Bookmark;

        $bmark->id = $request->input('bookmark_id');
        $bmark->book_id = $request->input('book_id');
        $bmark->user_id = $request->input('user_id');

        if($bmark->save())
        {
            return new BookmarkResource($bmark);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBook($id)
    {
        $bmark = Bookmark::where('book_id' , $id)->get();

        return json_encode($bmark);
    }

    public function showUser($user)
    {
        $bmark = Bookmark::where('user_id' , $user)->get();
        //dd($views);
        return json_encode($bmark);
    }

    public function show($user,$book)
    {
        $bmark = Bookmark::where('user_id',$user)->where('book_id',$book)->get();

        return json_encode($bmark);
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
        //
    }
}
