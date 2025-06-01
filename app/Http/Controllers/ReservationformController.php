<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservationform;
use Illuminate\Support\Facades\Auth;
use App\Models\Table;




class ReservationformController extends Controller




{


    public function index()
    {
        $tables = Table::all();
        return view('layouts.home', compact('tables'));
    }
    




    public function store(Request $request)
    {
        
        $request->validate([
            // 'table_id' => 'required|exists:tables,id',
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|email',
            'phone' => 'required',
            // 'guest_number' => 'required|integer|min:1',
            'res_date' => 'required|date',
            'res_time' => 'required',
            'message' => 'nullable|string',
        ]);

        Reservationform::create([
            'user_id'      => Auth::id(),
            'table_id'    => $request->table_id, 
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            // 'guest_number' => $request->guest_number,
            'res_date'   => $request->res_date,
            'res_time'   => $request->res_time,
            'message'    => $request->message,
        ]);

        return back()->with('success', 'Reservation submitted successfully!');
    }
    public function __construct()
{
    $this->middleware('auth');
}

}
