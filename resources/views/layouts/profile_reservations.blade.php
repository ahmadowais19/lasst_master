{{-- @extends('layouts.home')  --}}

{{-- @section('content') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Your Reservations</h2>
        <!-- زر فتح النموذج داخل مودال -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#reservationModal">
            Reserve a Table
        </button>
    </div>

    <!-- جدول عرض الحجوزات -->
    <div class="card shadow rounded">
        <div class="card-body">
            @if($reservations->count())
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Table</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>User Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $res)
                                <tr>
                                    <td>Table {{ $res->table->name ?? $res->table_id }}</td>
                                    <td>{{ $res->first_name }} {{ $res->last_name }}</td>
                                    <td>{{ $res->email }}</td>
                                    <td>{{ $res->phone }}</td>
                                    <td>{{ $res->res_date }}</td>
                                    <td>{{ $res->res_time }}</td>
                                    <td>{{ $res->message }}</td>
                                    <td>{{ ucfirst($res->status) }}</td>
                                    <td>
                                        <form action="{{ route('reservations.updateStatus', $res->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <select name="upcoming_reservation" onchange="this.form.submit()" class="form-control">
                                                <option value="still_going" {{ $res->upcoming_reservation == 'still_going' ? 'selected' : '' }}>Still Going</option>
                                                <option value="cancel" {{ $res->upcoming_reservation == 'cancel' ? 'selected' : '' }}>Cancel</option>
                                            </select>
                                        </form>
                                    </td>
                                                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $reservations->links() }}
                </div>
            @else
                <p class="text-muted">You have no reservations yet.</p>
            @endif
        </div>
    </div>

</div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- استدعاء مودال النموذج -->
{{-- @include('include.form_home') --}}
{{-- @endsection --}}
