<?php

namespace App\Http\Controllers;

use App\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Auth;
class ClientController extends Controller
{
    public function grid(){
        $aResult = DB::table('clients')->get();
        return view('client.client-grid',compact('aResult'));
    }
    public function index()
    {
        return view('client.add-client-form');
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
        $sCNICFront = '';
        $sCNICBack = '';
        if($request->has('cnic_front'))
        {
            $sPath = 'public/upload/client';
            $sFile = $request->file('cnic_front');
            $sFileExt = $sFile->getClientOriginalExtension();
            $sFilename = date('His').'_'.rand(100,999).'.'.$sFileExt;
            $sFile->move($sPath, $sFilename);
            $sCNICFront = $sPath.'/'.$sFilename;
        }
        if($request->has('cnic_back'))
        {
            $sPath = 'public/upload/client';
            $sFile = $request->file('cnic_back');
            $sFileExt = $sFile->getClientOriginalExtension();
            $sFilename = date('His').'_'.rand(100,999).'.'.$sFileExt;
            $sFile->move($sPath, $sFilename);
            $sCNICBack = $sPath.'/'.$sFilename;
        }
        $obj = new client();
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
        return redirect()->route('client')->with('success','Record Add Successfully.');
    }

    function changeLanguage(Request $request){
        DB::table('translations')->where('id','=',1)->update(
            [
                'sindhi' => $request->sindhi,
                'english' => $request->english,
            ]
        );
        return redirect()->back();
    }

    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
