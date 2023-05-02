<?php

namespace App\Http\Controllers;
use App\Election;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
    }
    public function data()
    {
        $elections = Election::all()->pluck('code','id');
        return view('dashboard.data',compact('elections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $elections = array( 
            array('type' => 'student_union','id' => '1'),
            array('type' => 'people_assembly_elections','id' => '2'),
            array('type' => 'parliament_elections','id' => '3'),
            array('type' => 'presidential_elections','id' => '4'));
        return view('dashboard.add_election',compact('elections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // to save image: $file_name = $this->saveImage($request->photo,'images/');

       $request->validate([
            'type'=>'required',
            'code'=>'required|max:12|min:4|string',
 
        ]);
        // dd($request);
        $result = Election::create([
            'type' => $request->type,
            'end_date' => $request->endDay,
            'start_date' => $request->startDay,
            'code' => encrypt($request->code),
        ]);
       
        if ($result) {
             return  redirect('/addRegion');
        }
        else
        {
          return back()->with('error','oops! something was wrong.');
        //   dd($result);  
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
