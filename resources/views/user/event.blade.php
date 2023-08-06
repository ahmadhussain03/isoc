@extends('layouts.app-user')

@section('content')
    <div class="card">
        <div class="card-header">
            <span>
                {{ $event->title }}
            </span>
            <span class="badge bg-success">
                Attended
            </span>
        </div>
        <div class="card-body">
            {!! $event->description !!}
        </div>
        <div class="card-footer">
            <div>Date: {{ $event->date->format('Y/m/d') }}</div>
            <div>From: {{ $event->from_time->format('h:i a') }} To: {{ $event->to_time->format('h:i a') }}</div>
        </div>
    </div>
@endsection

