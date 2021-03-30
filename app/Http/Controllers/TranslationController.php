<?php

namespace App\Http\Controllers;

use App\translation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aTranslation = DB::table('translations')->where('id','!=',1)->get();
        return view('translation-grid',compact('aTranslation'));
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
     * @param  \App\translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function show(translation $translation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function edit(translation $translation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, translation $translation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function destroy(translation $translation)
    {
        //
    }
}
