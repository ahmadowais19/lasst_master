<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservationform;
use App\Models\Table;
use App\Models\User;

class ReservationController extends Controller
{
    public function index(Request $request)
    {

    //     $query = Reservationform::with(['user', 'table'])
    // ->where('res_time', '>', now()) // فقط الحجوزات القادمة
    // ->orderBy('res_time');

        
        $query = Reservationform::with(['user', 'table'])->orderBy('res_time');

        if (request('date')) {
     $query->whereDate('res_date', request('date'));
}

        if ($request->date) {
            $query->whereDate('res_time', $request->date);
        }

        if ($request->table_id) {
            $query->where('table_id', $request->table_id);
        }

        if ($request->user_id) {
            $query->where('user_id', $request->user_id);
        }

        $reservations = $query->paginate(10);
        $tables = Table::all();
        $users = User::all();

        return view('layouts.reservations', compact('reservations', 'tables', 'users'));
    }

    public function update(Request $request, Reservationform $reservation)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,cancelled'
        ]);

        $reservation->status = $request->status;
        $reservation->save();

        return redirect()->back()->with('success', 'Reservation status updated.');
    }

    public function destroy(Reservationform $reservation)
    {
        $reservation->delete();

        return redirect()->back()->with('success', 'Reservation deleted.');
    }
}