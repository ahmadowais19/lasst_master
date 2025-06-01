    @extends('index_dash')

    @section('content9')
    <div style="max-width: 1000px; margin: auto;">
        <h2 class="text-xl font-bold mb-4">Reservations</h2>

        <form method="GET" class="mb-4 flex gap-3">
            <input type="date" name="date" value="{{ request('date') }}" class="form-control" />
            <select name="table_id" class="form-control">
                <option value="">All Tables</option>
                @foreach($tables as $table)
                    <option value="{{ $table->id }}" {{ request('table_id') == $table->id ? 'selected' : '' }}>
                        Table {{ $table->table_number }}
                    </option>
                @endforeach
            </select>
            <select name="user_id" class="form-control">
                <option value="">All Users</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            <button class="btn btn-secondary">Filter</button>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Table</th>
                    {{-- <th>Guests</th> --}}
                    <th>Time</th>
                    <th>User Status</th>
                    <th>Status</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $res)
                <tr>
                    <td>{{ $res->user->name }}</td>
                    <td>Table {{ $res->table->table_number }}</td>
                    {{-- <td>{{ $res->guest_number }}</td> --}}
                    <td>{{ $res->res_time }}</td>
                    <td>{{ $res->upcoming_reservation }}</td>                    
                    <td>{{ ucfirst($res->status) }}</td>
                    
                    <td>
                        <form action="{{ route('reservations.update', $res->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('PUT')
                            <select name="status" onchange="this.form.submit()" class="form-control">
                                <option {{ $res->status == 'pending' ? 'selected' : '' }}>pending</option>
                                <option {{ $res->status == 'approved' ? 'selected' : '' }}>approved</option>
                                <option {{ $res->status == 'cancelled' ? 'selected' : '' }}>cancelled</option>
                            </select>
                        </form>

                        <form action="{{ route('reservations.destroy', $res->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this reservation?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $reservations->links() }}
    </div>
    @endsection
