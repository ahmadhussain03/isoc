@extends('layouts.app-user')

@section('content')
<div class="card">
    <div class="card-header">Edit Leadership</div>

    <div class="card-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('election.comission.leadership.update', [ 'leadership' => $leadership ]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="text-md-end">{{ __('Name') }}</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $leadership->name }}" required autofocus>

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
                    <textarea id="description" type="text" class="summernote form-control @error('description') is-invalid @enderror" name="description">{{ old('description') ?? $leadership->description }}</textarea>

                    @error('description')
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
                    Update Leadership
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
