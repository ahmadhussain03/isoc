@extends('layouts.app-user')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Campaign Members</span>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Votes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <th scope="row">{{ $loop->index }}</th>
                            <td>{{ $member->leadership->name }}</td>
                            <td>{{ $member->votes_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $members->links() }}
        </div>
    </div>
@endsection
