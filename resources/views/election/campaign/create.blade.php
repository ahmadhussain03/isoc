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
        <form method="POST" action="{{ route('election.comission.campaign.store') }}" enctype="multipart/form-data">
            @csrf

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
                <label for="members" class="text-md-end">{{ __('Members') }}</label>

                <div class="">
                    <select id="members" type="text" class="form-control @error('members') is-invalid @enderror" name="members[]" multiple required></select>

                    @error('members')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-0">
                <button type="submit" class="btn btn-primary">
                    Create Campaign
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        var membersSelect = $('#members').select2({
            theme: 'bootstrap-5',
            datatype: 'json',
            ajax: {
                url: '{{ route("election.comission.leadership.index") }}',
                data: function (params) {

                    const type = $("#type").val()

                    var query = {
                        search: params.term,
                        page: params.page || 1,
                        type
                    }

                    return query;
                },
                processResults: function (data, params) {
                    console.log(data.data)
                    return {
                        results: data.data.map(leadership => ({ id: leadership.id, text: leadership.name })),
                        pagination: {
                            more: data?.meta?.next_page_url ? true : false
                        }
                    };
                }
            }
        });

        $("#type").change(function(){
            $('#members').val(null).trigger('change');
        })
    });
</script>
@endsection
