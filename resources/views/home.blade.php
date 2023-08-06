@extends('layouts.app-user')

@section('content')
<div class="card">
    <div class="card-header">Hi, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
</div>
@endsection
