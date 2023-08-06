@extends('layouts.app-user')

@section('content')
<div class="card">
    <div class="card-header">Create Event</div>

    <div class="card-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('admin.event.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="text-md-end">{{ __('Title') }}</label>

                <div class="">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="text-md-end">{{ __('Description') }}</label>

                <div class="">
                    <textarea id="description" type="text" class="summernote form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

             <div class="mb-3">
                <label for="date" class="text-md-end">{{ __('Date') }}</label>

                <div class="">
                    <input id="date" type="text" class="date-picker form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" autocomplete="off" required autofocus>

                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <div class="col-md-6">
                    <label for="from_time" class="text-md-end">{{ __('From Time') }}</label>
                    <div class="">
                        <input id="from_time" type="text" class="time-picker form-control @error('from_time') is-invalid @enderror" name="from_time" value="{{ old('from_time') }}" autocomplete="off" required autofocus>

                        @error('from_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                 <div class="col-md-6">
                      <label for="to_time" class="text-md-end">{{ __('To Time') }}</label>
                    <div class="">
                        <input id="to_time" type="text" class="time-picker form-control @error('to_time') is-invalid @enderror" name="to_time" value="{{ old('to_time') }}" autocomplete="off" required autofocus>

                        @error('to_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

              <div class="mb-3">
                <label for="image" class="text-md-end">{{ __('image') }}</label>

                <div class="">
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" autofocus>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-0">
                <button type="submit" class="btn btn-primary">
                    Create Event
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{ asset('css/jquery.datetimepicker.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
        $('.date-picker').datetimepicker({
            timepicker: false,
            format: 'Y-m-d'
        })
          $('.time-picker').datetimepicker({
            datepicker: false,
            format: 'H:i',
        }).datetimepicker("setDate", "0")
    });
</script>
@endsection
