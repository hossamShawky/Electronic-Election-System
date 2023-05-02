<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Committee;
use App\Election;
class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $committees=Committee::all();
      return view('dashboard.manage_committees',compact('committees'));
    }

    public function getRegion()
    {
        $regions = Region::all()->pluck('name','id');
        return view('dashboard.committee',compact('regions'));
    }
    
    public function indexapi()
    {
      $committees=Committee::all();
      return view('dashboard.manage_committees',compact('committees'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // $id=1;   
        //  $regions = Election::findOrFail($id)->regions();
        //  $committees = Committee::all();
        $regions = Region::all()->pluck('name','id');
        return view('dashboard.add_committee',compact("regions"));//, compact('regions', 'committees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules=[
            
        // ];
        // $validator=Validator::make($request->all(),$rules);

        // if($validator->fails()){
        //     return response()->json($validator->errors(),400);
        // }   

        $committees=Committee::insert($request->except("_token"));
        return redirect('/committees');
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
