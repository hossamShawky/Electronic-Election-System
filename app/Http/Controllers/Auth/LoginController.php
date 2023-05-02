<?php

namespace App\Http\Controllers\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Employee;
use Auth;
use Session;
use App\Election;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     public function login(Request $request)
    {
        $this->validate($request,[
            // 'national_id'=>'required|max:14|min:14|unique:admins|string',
            'username'=>'required|min:8|unique:admins|string',
            // 'fullName'=>'required|string',
            // 'email'=>'required|email|string',
            // 'electionCode'=>'required|max:4|min:6|Exists(elections)|string',
            'password'=>'required|max:14|min:1|string',
            // 'role'=>'required| ',

        ]);
        if (Auth::guard()->attempt([
            // 'national_id' => $request->national_id,
            'username' => $request->username,
            // 'email' => $request->email,
            'password' => $request->password,
            // 'role' => $request->role
        ]))
        {
            return redirect('/dashbourd');
            // if (auth()->role == 'Employee')
                // return redirect('/employee');
            // if (auth()->role == 'Advisor')
            //     return redirect('/manager');

        }

            return back()->with(Session::flash('error', 'can\'t find Admin data! please contact with super admin and try again.'));
    }
   

    public function EmployeeLogin(Request $request)
    {
        // if erorr comming from statment  then election code is not exist
        $code = $request->electionCode;
            $credentials = DB::table('elections')
            ->join('employees', 'elections.id', '=', 'employees.election_id')
            ->where([
                ['employees.national_id','=',$request->national_id]])->first();

        // if erorr comming from request  then emp data is not correct
        $name = $request->fullName;
        $n_id = $request->national_id;
        $pass = $request->password;
        $role = $request->role;
        $code = $request->electionCode;
             // dd($credentials);
        

        if (isset($credentials) && $name==$credentials->name && $n_id==$credentials->national_id && $pass==$credentials->password )
        {
            if($credentials->role == 'Advisor') 
                return redirect('/manager');
            else if($credentials->role == 'Employee') 
                return redirect('/employee');
        } else 
            return back()->with(Session::flash('error', 'Sorry it is Not allawed for You  to access this page!'));
    }
    // public function logout()
    // {
    //     session_start();
    //     session_destroy();
    //     return redirect('admin\register');

    // }

}
