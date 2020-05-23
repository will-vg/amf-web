<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illiminate\Support\Facades\DB;
use Auth;
use App\Order;
use App\Role;

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
        $orders = Auth::user()->orders;

        $role = Role::where('id', Auth::user()->role_id)->first();

        return view('home', [
            'orders' => $orders,
            'role' => $role
        ]);
    }
}
