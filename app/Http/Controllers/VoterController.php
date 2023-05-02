<?php

namespace App\Http\Controllers;
use DB;
use App\Voter;
use App\Region;
use App\Election;
use App\Election_voter;

use Illuminate\Http\Request;

class VoterController extends Controller
{
    
    public function index()
    {
        $voters = Voter::all();
         // $voters = DB::table('voters')->orderBy('created_at')->get();
         // $voters = DB::table('committees')
            // ->join('voters', 'committees.id', '=', 'voters.committee_id');
        // dd($voters);
        return view('dashboard.voters',compact('voters'));
    }
     //View All Voters after adding new onew
    public function voters()
    {
        $elections = DB::table('elections')->pluck("code","id");
        $regions = DB::table('regions')->pluck("name","id");
        $committees = DB::table('committees')->pluck("name","id");
        
        return view('dashboard.addVoters',compact('elections','regions','committees'));
    }

     public function chick(Request $request)
    {
          $voters =$request->all();
          return view('dashboard.voters',compact('voters'));
    }

   
    public function create()
    {
        $elections = DB::table('elections')->pluck("code","id");
        $regions = DB::table('regions')->pluck("name","id");
        $committees = DB::table('committees')->pluck("name","id");
        // $regions = DB::table('regions')
        // ->where("election_id",$id)
        // ->pluck("name","id");
        return view('dashboard.addVoter',compact('elections','regions','committees'));
    }

    public function createVotersRequest(Request $request)
    {
        return response()->json(
            [
                'success'=>'request has been sent to government',
            ]
        );
    }
   
    public function store(Request $request)
    {
        $voter = $request->except('_token');
        $id = Voter::insertGetId($voter);

        Election_Voter::create([
            "election_id"=>$request->election_id,
            "voter_id"=>$id
        ]);

         $voters = Voter::all();
        return redirect("/voters");

// _________________________________test_________________________________
        // $status = '0';
        // $employee_id = '1';
        // $fingerprint = 'fingerprint';
        // $election_id = '1';
        // $committee_id = '1';
        // $region_id = '2';
        // $name='name';
        // $national_id='29700000000018';
        // $national_id2='29800000000017';
        // $voters = array( 
        //     array(
        //     'national_id' => $national_id,
        //     'name'        => $name,
        //     'fingerprint' => $fingerprint,
        //     'status'      => $status,
        //     'employee_id' => $employee_id,
        //     'election_id' => $election_id,
        //     'committee_id'=>$committee_id,
        //     'region_id'   => $region_id,),
        //      array(
        //     'national_id' => $national_id2,
        //     'name'        => $name,
        //     'fingerprint' => $fingerprint,
        //     'status'      => $status,
        //     'employee_id' => $employee_id,
        //     'election_id' => $election_id,
        //     'committee_id'=>$committee_id,
        //     'region_id'   => $region_id,),
        // );

// _________________________________
        // dd($voters);
        if ($result) {
             // dd($result);   
             return response()->json([
            'message'=>'Great! ! Successfully store: '.count($voters).' New voters in datbase',
            'status' =>true,
        ]);
           // return redirect('/voters')->with('message','Great! ! Successfully store: '.count($voters).' New voters in datbase');
        }
        else
        {
          //dd($result);
          return back();  
        }
    }
public function profile(){ 
}



    public function storeVoters( Request $request)
    {
        //
        $checkName = $request->name;
        $checkNational_id = $request->national_id;
        $checkFingerprint = $request->fingerprint;
        $checkRegion = $request->region;
        
    }
    
    
   

 
    public function edit($id)
    {
        //
    }

    
     
  

//api elections

public function getVoterElections($n_id)
{
     $voter=Voter::where('national_id',"=",$n_id)->first();
    if($voter)
    { 
        $elections = Election_voter::where('voter_id','=',$voter->id)->select("voter_id","election_id")->get();
        return response()->json([
             "N.Of Elections : "=>count($elections),
            "Elections  : "=>$elections,
         ],200);
    }
    else{
        return response()->json(["No Data"],404);
    }
}


public function getElection($id)
{

$election = Election::where('id',$id)->first();
 

if($election)
{ 
      return response()->json([$election],200);
}
else{
    return response()->json(["No Data"],404);
}

}


//api
public function getvoter($n_id){
$voter=Voter::where("national_id","=",$n_id)->first();

if($voter){
    return response()->json([$voter],200);
}
else{
    return response()->json(["No Data"],404);
}
}

}

