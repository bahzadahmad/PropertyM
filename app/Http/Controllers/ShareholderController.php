<?php

namespace App\Http\Controllers;

use App\shareholder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Auth;
class ShareholderController extends Controller
{
    public function grid(){
        $aResult = DB::table('shareholders')->get();
        return view('shareholder.shareholder-grid',compact('aResult'));
    }
    public function index()
    {
        return view('shareholder.add-shareholder-form');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $sCNICFront = '';
        $sCNICBack = '';
        $sPath = 'public/upload/shareholder';
        if($request->has('cnic_front'))
        {
            $sFile = $request->file('cnic_front');
            $sFileExt = $sFile->getClientOriginalExtension();
            $sFilename = date('His').'_'.rand(100,999).'.'.$sFileExt;
            $sFile->move($sPath, $sFilename);
            $sCNICFront = $sPath.'/'.$sFilename;
        }
        if($request->has('cnic_back'))
        {
            $sFile = $request->file('cnic_back');
            $sFileExt = $sFile->getClientOriginalExtension();
            $sFilename = date('His').'_'.rand(100,999).'.'.$sFileExt;
            $sFile->move($sPath, $sFilename);
            $sCNICBack = $sPath.'/'.$sFilename;
        }
        $obj = new shareholder();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->cnic = $request->cnic;
        $obj->mobile = $request->mobile;
        $obj->address = $request->address;
        $obj->father_name = $request->father_name;
        $obj->next_of_kin = $request->next_of_kin;
        $obj->kin_cnic = $request->kin_cnic;
        $obj->cnic_front = $sCNICFront;
        $obj->cnic_back = $sCNICBack;
        $obj->added_by = Auth::id();
        $obj->save(); 
        return redirect()->route('shareholder')->with('success','Record Add Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shareholder  $shareholder
     * @return \Illuminate\Http\Response
     */
    public function show(shareholder $shareholder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shareholder  $shareholder
     * @return \Illuminate\Http\Response
     */
    public function edit(shareholder $shareholder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shareholder  $shareholder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shareholder $shareholder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shareholder  $shareholder
     * @return \Illuminate\Http\Response
     */
    public function destroy(shareholder $shareholder)
    {
        //
    }
}
