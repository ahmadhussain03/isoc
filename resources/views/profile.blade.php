@extends('layouts.app-user')

@section('content')
<div class="card">
    <div class="card-header">Update Profile</div>

    <div class="card-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('profile.store') }}">
            @csrf

            <div class="mb-3">
                <label for="first_name" class="text-md-end">{{ __('First Name') }}</label>

                <div class="">
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') ?? $user->first_name }}" required autofocus>

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="last_name" class="text-md-end">{{ __('Last Name') }}</label>

                <div class="">
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') ?? $user->last_name }}" required autofocus>

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="username" class="text-md-end">{{ __('Username') }}</label>

                <div class="">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') ?? $user->username }}" required autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="text-md-end">{{ __('Email Address') }}</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="country" class="text-md-end">{{ __('Country') }}</label>

                <div class="">
                    <select id="country" class="form-control @error('country') is-invalid @enderror" name="country" required>
                        <option>-- Select Country --</option>
                        @foreach (Countries::getList('en', 'php') as $countryCode => $country)
                            <option value={{ $countryCode }} @if($countryCode === (old('country') ?? $user->country)) selected @endif>{{ $country }}</option>
                        @endforeach
                    </select>

                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="text-md-end">{{ __('Password') }}</label>

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="password-confirm" class="text-md-end">{{ __('Confirm Password') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>
            </div>

            <div class="mb-0">
                <button type="submit" class="btn btn-primary">
                    Update Profile
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
