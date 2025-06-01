@extends('index_dash') 

@section('content11')
<div class="container mt-5">
    <h2 class="mb-4">Reservation Details</h2>

    @if($reservations->count() > 0)
        @foreach($reservations as $reservation)
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">{{ $reservation->first_name }} {{ $reservation->last_name }}</h4>
                    <p><strong>Email:</strong> {{ $reservation->email }}</p>
                    <p><strong>Phone:</strong> {{ $reservation->phone }}</p>
                    <p><strong>Number of Guests:</strong> {{ $reservation->guest_number }}</p>
                    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($reservation->res_date)->format('Y-m-d') }}</p>
                    <p><strong>Time:</strong> {{ $reservation->res_time }}</p>
                    <p><strong>Status:</strong> 
                        @if($reservation->status == 'approved')
                            <span class="badge badge-success">Approved</span>
                        @elseif($reservation->status == 'cancelled')
                            <span class="badge badge-danger">Cancelled</span>
                        @else
                            <span class="badge badge-warning">Pending</span>
                        @endif
                    </p>
                    @if($reservation->message)
                        <p><strong>Message:</strong><br>{{ $reservation->message }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <p>No reservations found for this user.</p>
    @endif

    <a href="{{ route('reservations.index') }}" class="btn btn-secondary mt-3">Back to My Reservations</a>
</div>
@endsection
