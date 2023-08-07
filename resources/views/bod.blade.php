@extends('layouts.main')

@section('content')
<!-- main-content  -->
    <div class="leader-ship">

        @foreach($bods as $bod)
        <div class=" mb-3" style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('leaderships/' . $bod->image) }}" class="img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;">{{ $bod->name }} – Board Of Director</h5>
                        <p class="" style=" border-bottom: 1px solid lightgray;font-size: 14px;line-height: 24px;color:#666666">
                            {!! $bod->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection
