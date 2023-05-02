<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Voter;
//elections
Route::get('/getvoterelections/{n_id}', 'VoterController@getVoterElections');
Route::get('/getelection/{e_id}', 'VoterController@getElection');
// candidates
Route::get('/getcandidateslist/{r_id}', 'CandidateController@getcandidateslist');
Route::get('/showcandidate/{c_id}', 'CandidateController@showcandidate');
// voter profile
Route::get('/getvoter/{n_id}', 'VoterController@getvoter'); 
// Voters
Route::get('/addVoters', 'VoterController@create')->name('addVoters');
Route::get('/addVotersRequest','RegionController@createVotersRequest');
Route::post('/addVoters', 'VoterController@store');
Route::get('/voters', function(){
    // $voters = App\Voter::pluck('id','name')->take(10);
    $voters = App\Voter::select('id','name','national_id')->take(10)->get();
    if($voters)
    return response()->json([
"Voters"=>$voters
    ],200);
    else
    return response()->json([
"Message"  => "No Voters Are Found" 
    ],404);
});

// Route::get('/candidates', 'CandidateController@chick');



Route::get('employee','employeeController@index')->name('employee');
Route::get('/mcommittees',  'CommitteeController@indexapi');
// Route::get('/addcommittees', 'CommitteeController@create');
Route::post('/addcommittees', 'CommitteeController@store');
Route::get('delcommittee/{id}','CommitteeController@destroy');
//Employees
Route::get('/memployees',  'employeeController@indexapi');
Route::post('/addemployees', 'employeeController@store');




##----------------------------------------------------##
// Special work again

Route::get("/voter/{nId}",function($nId){
    $voter = Voter::where('national_id','=',$nId)->first();
    if($voter)
    {
    return response()->json([$voter],200);
    }
    else{
        return response()->json([["Error"=>"No Voter Found"]],404);
    }       




});


    
Route::post("/testrequest",function(Request $r){
	return response()->json(["Name "=>$r->name],200);
});
Route::get("",function(){});
Route::get("",function(){});
Route::get("",function(){});
Route::get("",function(){});
Route::get("",function(){});
Route::get("",function(){});

##----------------------------------------------------##













Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

// Return Election


});



