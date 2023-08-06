@extends('layouts.app-user')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Campaigns</span>
            <a class="btn btn-primary" href="{{ route('election.comission.campaign.create') }}">Add Campaign</a>
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
                        <th scope="col">Type</th>
                        <th scope="col">Total Votes</th>
                        <th scope="col">Status</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($campaigns as $campaign)
                        <tr>
                            <th scope="row">{{ $loop->index }}</th>
                            <td>{{ $campaign->type }}</td>
                            <td>{{ $campaign->votes_count }}</td>
                            <td>
                                <span @class([
                                    'badge',
                                    'bg-primary' => $campaign->status === 'active',
                                    'bg-success' => $campaign->status === 'completed',
                                ])>
                                    {{ $campaign->status }}
                                </span>
                            </td>
                            <td>
                                @if($member = $campaign->members->first())
                                    <span class="badge bg-info">{{ $member->leadership->name }}</span>
                                @endif
                            </td>
                            <td class="">
                                <a class="px-1" href="{{ route('election.comission.campaign.show', [ 'campaign' => $campaign ]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </a>
                                <a class="px-1" href="{{ route('election.comission.campaign.destroy', ['campaign' => $campaign]) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form-{{ $campaign->id }}').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </a>

                                <form id="delete-form-{{ $campaign->id }}" action="{{ route('election.comission.campaign.destroy', ['campaign' => $campaign]) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                 @if ($campaign->status === 'active')
                                    <a class="px-1 badge bg-danger" href="{{ route('election.comission.campaign.update', ['campaign' => $campaign]) }}" onclick="event.preventDefault();
                                                        document.getElementById('campaign-update-form-{{ $campaign->id }}').submit();">
                                    Finish Campaign
                                    </a>

                                    <form id="campaign-update-form-{{ $campaign->id }}" action="{{ route('election.comission.campaign.update', ['campaign' => $campaign]) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('PUT')
                                    </form>
                                 @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $campaigns->links() }}
        </div>
    </div>
@endsection
