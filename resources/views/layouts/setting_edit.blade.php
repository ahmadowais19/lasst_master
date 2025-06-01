@extends('index_dash')

@section('content8')
    <h2 class="text-xl font-bold mb-4 text-center">Restaurant Settings</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-center">
        <form method="POST" action="{{ route('settings.update') }}" class="w-100" style="max-width: 600px;">
            @csrf

            <div class="mb-3">
                <label>Opening Time</label>
                <input type="time" name="opening_time" value="{{ old('opening_time', $settings->opening_time ?? '') }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Closing Time</label>
                <input type="time" name="closing_time" value="{{ old('closing_time', $settings->closing_time ?? '') }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Max Guests per Slot</label>
                <input type="number" name="max_guests_per_slot" value="{{ old('max_guests_per_slot', $settings->max_guests_per_slot ?? '') }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Reservation Duration (minutes)</label>
                <input type="number" name="reservation_duration" value="{{ old('reservation_duration', $settings->reservation_duration ?? '') }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Buffer Time (minutes)</label>
                <input type="number" name="buffer_time" value="{{ old('buffer_time', $settings->buffer_time ?? '') }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-success w-100">Save Settings</button>
        </form>
    </div>
@endsection

