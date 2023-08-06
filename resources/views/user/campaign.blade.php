@extends('layouts.app-user')

@section('content')
    <div class="card">
        <div class="card-header">
            <span>
                Campaign For: {{ Str::ucfirst(Str::replaceFirst('_', ' ', $campaign->type)) }}
            </span>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row align-items-center justify-content-center">
                @foreach ($campaign->members as $member)
                    <div class="p-2 col-md-6">
                        <div class="card">
                            <div class="card-header">{{ $member->leadership->name }}</div>
                            <div class="card-body">
                                <img src="{{ asset('leaderships/' . $member->leadership->image ) }}" class="img-thumbnail" height="50" />
                            </div>
                            @if (!$voted)
                                <div class="card-footer">
                                    <button class="btn btn-primary" onclick="event.preventDefault();
                                                        document.getElementById('vote-form-{{ $member->id }}').submit();">
                                                        Vote For {{ $member->leadership->name }}
                                    </button>
                                    <form id="vote-form-{{ $member->id }}" action="{{ route('user.campaign.vote', [ 'campaign' => $campaign, 'member' => $member ]) }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            @elseif ($member->id === $voted->campaign_member_id)
                                <span class="btn btn-success">You Have Voted For {{ $voted->campaignMember->leadership->name }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

