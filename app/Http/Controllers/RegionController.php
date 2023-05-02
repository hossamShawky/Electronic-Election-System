<?php

namespace App\Http\Controllers;
use DB;
use App\Region;
use App\Election;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('dashboard.regions',compact('regions'));
    }
   

    public function create()
    {
        $id='1';
        $elections = DB::table('elections')->pluck("code","id");
    //     $regions = DB::table("regions")
    //     ->where("countries_id",$id)
    //     ->pluck("name","id");
    //     // return json_encode($regions);
        return view('dashboard.addRegion', compact('elections'));
    }
     public function getRegions($id)
    {
        $regions = DB::table("regions")
        ->where("election_id",$id)
        ->pluck("name","id");
        // dd($regions);
        return  response()->json([
            'regions' => $regions]);
        // return json_encode($regions);
        // return view('dashboard.addRegion');//, compact('regions', 'committees'));
    }
    public function getElections()
    {
        $elections = DB::table('elections')->pluck("code","id");
        return view('dashboard.addRegion',compact('elections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regions = $request->except('_token');
        $result = Region::insert($regions);
        return redirect('/regions');
      
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
