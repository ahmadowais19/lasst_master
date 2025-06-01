@extends('index_dash')

@section('content10')
    <h2 class="text-xl font-bold mb-4">Users</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th> <!-- جديد -->
                <th>Blocked?</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ ucfirst($user->role) }}</td> <!-- عرض الدور -->
                <td>{{ $user->is_blocked ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>

                    @if($user->role !== 'admin') <!-- لا يمكن حظر الادمن -->
                        <form action="{{ route('users.toggle-block', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-sm {{ $user->is_blocked ? 'btn-success' : 'btn-warning' }}">
                                {{ $user->is_blocked ? 'Unblock' : 'Block' }}
                            </button>
                        </form>
                    @else
                        <span class="text-muted">Admin</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
@endsection
