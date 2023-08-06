@extends('layouts.app-user')

@section('content')
<div class="card">
    <div class="card-header">Create Leadership</div>

    <div class="card-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('election.comission.leadership.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="text-md-end">{{ __('Name') }}</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                    @error('name')
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
                <label for="type" class="text-md-end">{{ __('Type') }}</label>

                <div class="">
                    <select id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" autocomplete="off">
                        <option value="">-- Select Type --</option>
                        <option value="president" @if(old('type') !== null && old('type') === 'president') selected @endif>President</option>
                        <option value="vice_president" @if(old('type') !== null && old('type') === 'vice_president') selected @endif>Vice President</option>
                        <option value="general_secretary" @if(old('type') !== null && old('type') === 'general_secretary') selected @endif>General Secretary</option>
                        <option value="treasurer" @if(old('type') !== null && old('type') === 'treasurer') selected @endif>Treasurer</option>
                        <option value="bod" @if(old('type') !== null && old('type') === 'bod') selected @endif>Board Of Director</option>
                    </select>

                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
                    Create Leadership
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
@endsection
