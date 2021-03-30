<?php

namespace App\Http\Controllers;

use App\project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
class ProjectController extends Controller
{
    public function grid(){
        $aResult = DB::table('projects')->get();
        return view('project.project-grid',compact('aResult'));
    }
    public function index()
    {
        $aShareholder = DB::table('shareholders')->select('id','name','owner')->get();
        return view('project.add-project-form',compact('aShareholder'));
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
        $sMediaName = '';
        if($request->has('file'))
        {
            $sPath = 'public/upload/project';
            $sFile = $request->file('file');
            $sFileExt = $sFile->getClientOriginalExtension();
            $sFilename = date('His').'_'.rand(100,999).'.'.$sFileExt;
            $sFile->move($sPath, $sFilename);
            $sMediaName = $sPath.'/'.$sFilename;
        }
        $obj = new project();
        $obj->name = $request->name;
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->picture = $sMediaName;
        $obj->shareholder = $request->shareholder;
        $obj->percentage = $request->percentage;
        $obj->cost_of_land = $request->cost_of_land;
        $obj->saleable_area = $request->saleable_area;
        $obj->added_by = Auth::id();
        $obj->save(); 
        return redirect()->route('project')->with('success','Record Add Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}
