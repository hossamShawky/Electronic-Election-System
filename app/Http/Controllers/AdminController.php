<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   /**
     * Where to redirect admins after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    public function index()
    {
       //
    }
    // public function doLogin(Request $request)
    // {
    //     $data = $request->validate([
    //         // 'national_id'=>'required|max:14|min:14|unique:admins|string',
    //         // 'username'=>'required|min:8|unique:admins|string',
    //         'email'=>'required|email|string',
    //         // 'fullName'=>'required|string',
    //         // 'electionCode'=>'required|max:4|min:6|Exists(elections)|string',
    //         'password'=>'required|max:18|min:8|string',
    //         // 'role'=>'required| ',

    //     ]);
    //     $query = [
    //          'email' => $data['email'],
    //         'password' => $data['password'],
    //     ];

    //     $allow = auth()->guard('admin')->attempt($query);
        
    //     // dd($cred);
    //     if(!$allow)
    //     {
    //         // $code = '0987654321ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //         // $code = sha1($code,'5');
    //         // echo $code;
    //         // dd($code);
    //         return view('dashboard.dashboard_part');
    //     } else {
    //         return back()->with('error','you aren\'t belong to the system ');
    //     }


    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $elections = \App\Election::all();
        return view('dashboard.add_region',compact('elections'));
    }
    public function store(Request $request){
         $request->validate([
            'election_id'=>'required|exists:elections,id',
            'serial_number'=>'required|min:5|Integer',
            'number_of_seats'=>'required|min:1|Integer',
        ],[
            'required'=>"هذا الحقل مطلوب",
            'integer'=>"هذا الحقل يجب ان يكون رقما صحيحا ",
            'election_id.exists'=>'هذه الانتخابات  غير موجوده  ',
        ]);


        $newRegion = new Region;
        $newRegion->election_id=$request->election_id;
        $newRegion->serial_number=$request->serial_number;
        $newRegion->number_of_seats=$request->number_of_seats;

$newRegion->save();


echo "Added Sucssfully";
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

     
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
