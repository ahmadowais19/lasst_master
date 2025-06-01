@extends('index_dash')

@section('content5')
    <h2 class="text-xl font-bold mb-4">Table List</h2>
    <a href="{{ route('tables.create') }}" class="btn btn-primary mb-3">Add Table</a>

    <table class="table table-bordered">
        <thead>         
            <tr>
                <th>Table #</th>
                <th>Seating Capacity</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $table)
            <tr>
                <td>{{ $table->table_number }}</td>
                <td>{{ $table->seating_capacity }}</td>
                <td>{{ $table->is_available ? 'Available' : 'Unavailable' }}</td>
                <td>
                    <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tables.destroy', $table->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
