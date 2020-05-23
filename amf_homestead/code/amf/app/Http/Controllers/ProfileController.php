<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Role;

class ProfileController extends Controller
{
    public function index($user) {
        $user = User::findOrFail($user); #Throw error on user not found

        $orders = Order::where('user_id', $user->id)->get(); #Get all orders for a specific user

        $role = Role::where('id', $user->role_id)->first();

        return view('profile', [
            'user' => $user,
            'role' => $role,
        ]); #Show user page on attempted profile load
    }
}
