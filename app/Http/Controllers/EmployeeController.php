<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use  App\Candidate;
use App\Candidate_vote;

use  App\Region;
use  App\Committee;
use  App\Voter;
use  App\Vote;
use  App\Employee;
 
use App\ListCand; 
use App\List_vote; 
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        session()->forget('voter_id');
        $voters=Voter::all();//->where("region_id","=","1");
        $employees=Employee::all();
        return view('versionOne.employee',['voters'=>$voters,'employees'=>$employees]);

    }
    public function employees()
    {
        $employees = Employee::all();
        return view('dashboard.manage_employees',compact('employees'));
    }
 
    public function create()
    {
        // dd(2);

        // $regions = Region::all()->pluck('name','id');
        $committees = Committee::all()->pluck('name','id');
        return view('dashboard.addEmployee',compact('committees'));
    }

    public function store(Request $request)
    {
        $employees=Employee::insert($request->except("_token"));
        return redirect('/employees');
    }




    public  function searchVoter(Request  $request){


        $q =$request['nId'];

        if ($q != ''){

            $citizenBrithYear=substr($q,1,2); //second and third number of left
            $currentYear=substr(date('y-m-d'),0,2); //20
            $voter= Voter::Where('national_id','=',$q)->first();
            // Check If Citizen Found In DataBase
            if($voter )
            {
// Mean that citizen is not allowed to vote => (age<18)
                if((int)$citizenBrithYear<(int)$currentYear){
                    return redirect()->back()->with('search','    هذا المواطن ليس له أحقيه التصويت');
                }
                $votes=Vote::All();
                $status=false;
                //Check If Citizen Voted Or Not
//                            foreach($votes as $vote){
//
//                                if($vote->voter_id==$voter->id){
//                                    $status=true; break;
//                                }
//                            }

                $status = $voter->status=="1"?true:false;
                if($status){
                    return redirect()->back()->with('search','    هذا الناخب قام بالتصويت');}
                else{
 
                    $candidates=Candidate::all();
                    $lists=ListCand::all();
                    session()->put('voter_id',$voter->id);
                    return  view('versionOne.citizenVote',
                        [
                            'candidates'=>$candidates,
                             'lists'=>$lists,
                        ]);
                }

            }
            else {
                return redirect()->back()->with('search','لا يوجد ناخب بهذا الرقم');
            }
        }
        else{
            return redirect()->back()->with('search','من فضلك أدخل الرقم القومي للمواطن');}
    }

    public  function  citizenVote(Request  $r){ 

                    $candidates=Candidate::all();
                    // $sectors=Region::where('sector_id','=','0')->get();
                    
                    $lists=ListCand::all();
                   $voter_id= $r->voter_id;
                    return  view('versionOne.citizenVote',
                        ['candidates'=>$candidates,
                         'lists'=>$lists,
                        ]);

                            }
    public  function  giveVote(Request $r){ 

// return $r->list;
 try{

                     $n=1;
        $voter_id= $r->voter_id;
        $allowedCandidates=  Voter::where('id',$voter_id)->first()->region->number_of_seats ;
        //    To Show Candidates That Voter Selected
        if(! is_null($r->vote)  &&   $r->list > 0){ 
            $counter=count($r->vote);

        }
        else{
  return redirect('citizenVote')->with("warning","يجب عليك أن تختار عدد  ".$allowedCandidates."مرشح و عدد".$n."قائمه");
        }

        if($counter>$allowedCandidates)  // Number Will Be Dynamic With Region
             return redirect('citizenVote')->with("warning","يجب عليك أن تختار عدد  ".$allowedCandidates."مرشح و عدد".$n."قائمه");
        else if($counter<$allowedCandidates)  // Number Will Be Dynamic With Region
             return redirect('citizenVote')->with("warning","يجب عليك أن تختار عدد  ".$allowedCandidates."مرشح و عدد".$n."قائمه");
        else
        {
            DB::beginTransaction();
            for($i=0;$i<$counter;$i++)
            {
                $cand=Candidate::where('serial_number','=',$r->vote[$i])->first();
                $vote=Vote::where('voter_id','=',$voter_id)->first();
                if(! $vote) {
                    $vote = new Vote;
                    $vote->voter_id = $voter_id;
                    $vote->location = "minia";
                    $vote->time = Carbon::now();
                    $vote->committee_id = 1;
                    $vote->save();
                }
            // Vote To Candidate(s)
                $votecand=new Candidate_vote;
                $votecand->vote_id=$vote->id;
                $votecand->candidate_id=$cand->id;
                $votecand->save();
                session()->forget('voter_id');
            }
            
            // Vote To List
                $votelist=new List_vote;
                $votelist->vote_id=$vote->id;
                $votelist->list_id= $r->list;
                $votelist->save();

        Voter::where('id','=',$voter_id)->update([
            "status"=>"1",
        ]);

        DB::commit();
            return  redirect('/employee')->with('success','لقد قام الناخب بالتصويت بنجاح');

        }

 }
catch (\Exception $ex) {
    DB::rollback();
    // return $ex;
        return redirect('/employee')->with('error','عفوا,لقد وقع خطأ قم بالمحاوله لاحقا');
    }
    }


    function voidVoting (){
    	echo "هل تريد بالفعل ابطال صوتك؟";
    }


}


