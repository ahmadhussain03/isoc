@extends('layouts.app-user')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Event Attendance</span>
        </div>

        <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Attended At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->index }}</th>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ Carbon\Carbon::parse($user->pivot->attended_at)->format('Y/m/d h:i a') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
