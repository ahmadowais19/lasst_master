<?php
namespace App\Http\Controllers\Admin;



use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Reservationform;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        // $users = User::where('is_admin', false)->paginate(10);
        $users = User::where('role', 'user')->paginate(10);
        return view('layouts.users_blocked', compact('users'));
    }

    public function show(User $user)
    
    {


        $reservations = $user->reservationform()->orderBy('res_date', 'desc')->get();

        return view('layouts.view_user', compact('user', 'reservations'));

        // $reservations = $user->reservations()->orderBy('res_date', 'desc')->get(); // Define $reservations

        // return view('layouts.view_user', compact('user', 'reservations'));

        // return view('layouts.view_user', compact('user', 'reservations'));

        // $reservations = $user->reservations()->orderBy('res_date', 'desc')->get();

        // $reservation = $user->reservation()->orderBy('res_date', 'desc')->first();
    }
    

    public function toggleBlock(User $user)
    {
        $user->is_blocked = !$user->is_blocked;
        $user->save();

        return redirect()->back()->with('success', 'User status updated.');
    }

    public function profile()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }
    
    public function updateProfile(Request $request)
    {
        $user = auth()->user();
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);
    
        $user->update($request->only('name', 'email'));
    
        return redirect()->back()->with('success', 'Profile updated.');
    }
    
    public function reservationHistory()
    {
        $userId = Auth::id();
$reservations = Reservationform::with('table')
    ->where('user_id', $userId)
    ->latest()
    ->paginate(10);        return view('layouts.profile_reservations', compact('reservations'));
    }



    public function updateStatus(Request $request, $id)
{
    $request->validate([
        'upcoming_reservation' => 'required|in:cancel,still_going',
    ]);

    $reservation = Reservationform::findOrFail($id);
    
    // تأكد إن المستخدم هو صاحب الحجز (أمان)
    if (auth()->id() !== $reservation->user_id) {
        abort(403);
    }

    $reservation->upcoming_reservation = $request->upcoming_reservation;
    $reservation->save();

    return redirect()->back()->with('success', 'Reservation status updated.');
}

}