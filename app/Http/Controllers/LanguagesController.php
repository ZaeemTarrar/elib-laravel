<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\Http\Requests;
use App\Http\Resources\Language as LanguageResource;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Get languages
         $lang = Language::paginate(15);
         // return collection of grade as resource
         return LanguageResource::collection($lang);
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
        $lang = $request->isMethod('put') ? Language::findOrFail($request->language_id) : new Language;

        $lang->id = $request->input('language_id');
        $lang->name = $request->input('name');
        $lang->active = $request->input('active');

        if($lang->save())
        {
            return new LanguageResource($lang);
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
        $lang = Language::findOrFail($id);

        return new LanguageResource($lang);
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
        $lang = Language::findOrFail($id);

        if($lang->delete())
        {
            return new LanguageResource($lang);
        }
    }
}
