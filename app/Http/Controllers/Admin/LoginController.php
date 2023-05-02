<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\Employee;
use App\Admin;
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
    // protected $guard = 'admin';

    // protected function guard()
    // {
    //     return Auth::guard('admin');
    // }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('dashboard.Admin.login');
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            // 'national_id'=>'required|max:14|min:14|unique:admins|string',
            // 'username'=>'required|min:8|unique:admins|string',
            'email'=>'required|email|string',
            // 'fullName'=>'required|string',
            // 'electionCode'=>'required|max:4|min:6|Exists(elections)|string',
            'password'=>'required|max:18|min:8|string',
        ]);
        $query = [
             'email' => $data['email'],
            'password' => $data['password'],
        ];
        $allow = Auth::guard('admin')->attempt($query);
        if( $allow)
        {
            // $code = '0987654321ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            // $code = sha1($code,'5');
            // dd($code);
            return view('dashboard.dashboard_part');
        } else {
            return back()->with('error','you aren\'t belong to the system ');
        }
    }

    
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/admin/login');
    }

}
