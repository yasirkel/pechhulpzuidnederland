<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $user = Auth::user();
        $admin = $user->role_id == '3';
        $garage = $user->role_id == '2';

        if($user && $user->role_id == '1')
        {
            // return view('roles.user',[
            //     'user' => $user,
            // ]);

            return redirect()->route('user');
        }

        if($admin)
        {
            // return view('roles.admin',[
            //     'admin' => $admin,
            // ]);

            return redirect()->route('admin');
        }

        if($garage)
        {
            // return view('roles.garage',[
            //     'garage' => $garage,
            // ]);
            return redirect()->route('garage');
        }
    }
}
