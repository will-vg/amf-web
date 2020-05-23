<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Order;

class OrderController extends Controller
{
    public function postOrder(Request $request) {
        $order = new Order(); #Create a new order
        #$user = Auth::user(); #This isn't necessary--could be useful down the line?
        $order->user_id = Auth::id(); #Set user_id as the ID of the current user
        $order->material = $request->material; #Send contents of the 'materials' textarea
        $order->save(); #Save the current order & push to the database

        return redirect('/home')->with('message', 'Order Posted'); #Refresh the page (currently only used on the home page)
    }

    public function delete($id) {
        $order = Order::find($id);
        $order->delete();
        return redirect('/home')->with('message', 'Order Deleted'); #Refresh the page with deletion message
    }
}