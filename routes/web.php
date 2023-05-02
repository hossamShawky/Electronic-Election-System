<?php

use App\Candidate;

use App\Collection;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/addRegion','AdminController@create');
// Route::post('/addRegion','AdminController@store');
// Route::get('/addvoters',function (){
//     $elections = \App\Election::all();
//     return view('dashboard.add_voters',compact('elections'));;
// });
// Route::post('/addvoters',function (Request $request){

// $citizens=\App\Citizen::all();
//     if (isset($citizens) && $citizens->count()) {
//         $voters = [];
//         foreach ($citizens as $citizen) {

//             $citizenBrithYear=substr($citizen->nationid,1,2); //second and third number of left
//             $currentYear=substr(date('y-m-d'),0,2); //20
//             if((int)$citizenBrithYear<(int)$currentYear) {continue;}
//             $voters[] = [
//                 "name"=>$citizen->name,
//                 "national_id"=>$citizen->nationid,
//                 "region_id"=>$citizen->region->id,
//                 "election_id"=>$request->election_id,
//                 "employee_id"=>1,
//                 "committee_id"=>2,
//                 "fingerprint"=>"FINGERPRINT",
//                 "status"=>'0',

//             ];
//         }
//         Voter::insert($voters);

// echo "تمت الاضافه بنجاح".count($voters);
//     }


// })->name('voters');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
   return view('layout.partials.mainContent');
});

Route::get('result/{id}','CandidateController@getresult');
Route::get('/addElection','ElectionController@create');
Route::post('/addElection','ElectionController@store')->name('addElection');
//committees
Route::get('/addCommittee','CommitteeController@create');
Route::post('/addCommittee','CommitteeController@store')->name('addCommittee');
// Route::resource('candidates', 'CandidateController');
Route::get('committees','CommitteeController@index');

Route::get('/data','ElectionController@data');

Route::get('getRegions/{id}','CandidateController@getRegions');
Route::get('/regions', 'RegionController@index');
Route::get('/addRegion','RegionController@create');
Route::post('/addRegion','RegionController@store')->name('addRegion');

Route::get('/addCandidate', 'CandidateController@create');
Route::post('/addCandidate', 'CandidateController@store')->name('addCandidate');
// Route::get('/addCandidates', 'CandidateController@check');
Route::post('/addCandidatesRequest','CandidateController@createCandidatesRequest')->name('addCandidatesRequest');
Route::get('/candidates', 'CandidateController@index')->name('Candidates');
//employeees
Route::get('/addEmployee','EmployeeController@create');
Route::post('/addEmployee','EmployeeController@store')->name('addEmployee');
Route::get('/employees','EmployeeController@employees');


// Route::resource('voters', 'VoterController');
//voter
Route::get('/addVoter', 'VoterController@create');
Route::post('/addVoter', 'VoterController@store')->name('addVoter');
//voters
Route::get('/addVoters', 'VoterController@voters');
Route::post('/addVoters', 'VoterController@storeVoters')->name('addVoters');

Route::get('/voters', 'VoterController@index')->name('Voters');
// Route::get('/candidates', 'CandidateController@chick');
Route::get('/dashboard', function () {
   return view('dashboard.dashboard_part');
});

// Route::get('/committee', function () {
//    return view('dashboard.committee');
// });

Route::get('/committee','CommitteeController@getRegion');


        // version one Routes



Route::get('vote', function () {
    return view('versionOne.vote');
});


Route::get('check_mac','employeeController@checkMac')->name('check_mac');
 


Route::get('welcomePage', function () {
    return view('versionOne.welcomePage');
});

Route::get('login', function () {
    return view('versionOne.login');
});
Route::get('voting_page', function () {
    return view('versionOne.voting_page');
});

Route::get('manager', function () {
    return view('versionOne.manager');
})->name('manager');


Route::get('admin/login','Admin\LoginController@showLoginForm');
Route::get('admin/register','Admin\RegisterController@showRegistrationForm');
Route::post('admin/login','Admin\LoginController@login')->name('admin.doLogin');
Route::post('admin/register','Admin\RegisterController@register')->name('admin.register');
Route::post('admin/logout','Admin\LoginController@logout')->name('admin.logout');





//--------------------------------------------------------
//To view Employee Page With All Voters Data
Route::get('employee','employeeController@index');
//To Search Votter
Route::post('/searchvoter','employeeController@searchVoter');
//To Save Voter`s Vote
Route::post('/givevote','employeeController@giveVote');

Route::get('citizenVote',function (){
    return view('versionOne.citizenVote',['candidates'=>Candidate::all(),'lists'=>Collection::all()]);
});
//--------------------------------------------------------
//add region name attribute
Route::get('session',function (){
    return Session::get('voter_id');
});

// Voter`s Profile

Route::get("/voterprofile",'VoterController@profile');



// Auth::routes();
Route::post('/login', 'Auth\LoginController@EmployeeLogin')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', function () {
    return view('versionOne.welcomePage');})->name('home');


    use App\ListCand; 

    Route::get("test",function(){
        return ListCand::all();
    });