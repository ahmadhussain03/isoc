@extends('layouts.main')

@section('content')
<!-- main-content  -->
    <div class="leader-ship">

        @if($president)
            <div class=" mb-3" style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('leaderships/' . $president->image) }}" class="img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;">{{ $president->name }} – President</h5>
                        <p class="" style=" border-bottom: 1px solid lightgray;font-size: 14px;line-height: 24px;color:#666666">
                            {!! $president->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($vicePresident)
            <div class=" mb-3" style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('leaderships/' . $vicePresident->image) }}" class="img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;">{{ $vicePresident->name }} – Vice President</h5>
                        <p class="" style=" border-bottom: 1px solid lightgray;font-size: 14px;line-height: 24px;color:#666666">
                            {!! $vicePresident->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($generalSecretary)
            <div class=" mb-3" style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('leaderships/' . $generalSecretary->image) }}" class="img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;">{{ $generalSecretary->name }} – General Secretary</h5>
                        <p class="" style=" border-bottom: 1px solid lightgray;font-size: 14px;line-height: 24px;color:#666666">
                            {!! $generalSecretary->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($treasurer)
            <div class=" mb-3" style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('leaderships/' . $treasurer->image) }}" class="img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;">{{ $treasurer->name }} – General Secretary</h5>
                        <p class="" style=" border-bottom: 1px solid lightgray;font-size: 14px;line-height: 24px;color:#666666">
                            {!! $treasurer->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>
@endsection
