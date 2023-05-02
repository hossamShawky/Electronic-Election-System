<?php

namespace App\Http\Controllers;
use DB;
use App\Candidate;
use App\Election;
use App\Region;
use App\Candidate_vote;
use App\Collection;
use Illuminate\Http\Request;
use Redirect,Response;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        // $candidates = DB::table('candidates')->orderBy('created_at')->get();
        // dd($candidates);
        return view('dashboard.candidates',compact('candidates'));
    }

    public function create()
    {
        // $id='1';
       
        //  $regions = DB::table('regions');
        // ->where("election_id",$id)
        // ->pluck("name","id");
        $elections = DB::table('elections')->pluck("code","id");
        $regions= Region::all();
        $lists=Collection::all();
        return view('dashboard.addCandidate',compact('elections','regions','lists'));
    }
    public function getRegions($id)
    {
       $regions = DB::table("regions")
        ->where("election_id",$id)
        ->pluck("name","id");
        // dd($regions);
        return  response()->json([
            'regions' => $regions]);
    }
    public function getresult($id){
   
    return $candidates=Candidate::where('region_id','=',$id)->get();
$results=array();    # Store Candidate_id and Count
foreach($candidates as $index => $c){
 array_push($results,
[$c->id,Candidate_vote::where('candidate_id',$c->id )->count()]);
// echo $c->id."<br> COUNT => ".Candidate_vote::where('candidate_id',$c->id )->count()
// ."<hr>";
} 

// return Candidate::where('id',$res[0][0])->get();

return view('versionOne.show_result',['candidates'=>$candidates,'results'=>$results]);
    
    }
    
    
    public function createCandidatesRequest(Request $request)
    {
        return  redirect()->back()->with('message','request has been sent to government');
        // return response()->json(
        //     [
        //         'success'=>'request has been sent to government',
        //     ]
        // );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function store(Request $request)
    // {
    //      $result = Model::create([
    //         'type' => $request->type,
    //         'name' => $request->name,
    //     ]);
    //     if ($result)
    //         return response()->json([
    //             'success' => true,
    //             'data' => $result->toArray()
    //         ]);
    //     else
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'there are Error system can\'t add candidates '
    //         ], 500);


    // }
     public function check(Request $request)
    {

          $candidates =$request->all();
          return view('dashboard.candidates',compact('candidates'));

    }
    
     public function store(Request $request)
        {
            $candidates = $request->except('_token');
            $result = Candidate::insert($candidates);
            return redirect('/candidates');

        // $result = Candidate::insert([
        //     'symbol_name' => $request->symbol_name,
        //     'type' => $request->type,
        //     'serial_number' => $request->serial_number,
        //     'national_id'=> $request->national_id,
        //     'program' => $request->program,
        //     'election_id' => $request->election_id,
        //     'region_id'=>$request->region_id ,
        //     'collection_id' => $request->collection_id ,
        //     'image' => $request->image,
        //     'symbol' => $request->symbol,
        //     'sur_name' => $request->sur_name ,
        //     'name' => $request->name,
        //     'party' => $request->party,
        // ]);
       
        if ($result) {
             // dd($result);   
             return  redirect('/candidates')->with('message','Great! Successfully store: '.count($candidates).' New candidates in datbase');
        }
        else
        {
          // return back();
          return back()->dd($result);  
        }

    }
//------------------------ well done function ----------------
  //   public function store(Request $request)
  // {
  //    $collection_id = 2;
  //    if ($request->type == 'individual') {
  //        $collection_id = 1;
  //    }
  //     $data = $request->only('symbol_name','type','serial_number','national_id','program','election_id','region_id','collection_id','image','symbol','sur_name','name','party');
  //     Candidate::insert($data);
  //     return Redirect::to("addCandidate")->withSuccess('Great! Successfully store candidates in datbase');
  // }
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

//api 

public function getcandidateslist($r_id)    
{
 $candidates=Candidate::where("region_id","=",$r_id)->get();
//  Return Candidates And Lists based on region_id (then lists of regions based on sector_id)
 $lists=Collection::where("region_id","=",$r_id)->get();
  
 if  ($candidates){
    return response()->json([$candidates,$lists],200);

 }
 else{
    return response()->json(["No Data"],404);

 }
}
 public function showcandidate($c_id)  
 {
    
     $candidate=Candidate::find($c_id);
     if( $candidate ){
        return response()->json([$candidate],200);
     }
     else{
        return response()->json(["No Data"],404);

     }
 }  

}


