@extends('layouts.main')

@section('content')
<div class="div-events d-flex justify-content-center">
        <div class="main-events d-flex flex-column " >
          <div class="events my-5 d-flex" style="background-color: #e0e2e5;">
            <span class="" style="height: 100%; width: 10px; background-color: #29af8a;"></span>
            <span class="ps-3 py-3" style="font-size: x-large; color: #29af8a; font-weight: 500; ">{{ $title }}</span>
          </div>
          <div class="events-mid d-flex justify-content-between">
            @if($firstEvent)
            <div class="card bg-transparent border-0 me-4">
              <img src="{{ asset('events/' . $firstEvent->image) }}" style="height: 50vh; width: 34rem;" class="" alt="" srcset="{{ asset('events/' . $firstEvent->image) }}">
              <div class="event-label d-flex">
                <div class="event-icon " style="padding-right: 1rem; background-color: #29af8a;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 5rem; height:7rem; color: #fff; margin-left: 1rem;" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>
                </div>
                <div class="event-title d-flex flex-column" >
                  <span style="width: 26rem; height: 4rem; font-size: 1.25rem; font-weight: 500;" class="d-flex align-items-end border-bottom pb-2 ps-5 text-black">{{ $firstEvent->title }}</span>
                  <span style="width: 26rem; height: 4rem; font-weight: 600; color: #BDBDBC;" class="d-flex align-items-start pt-2 ps-5"><i class="fa-regular fa-clock pe-2 pt-1" style="color: #BDBDBC;"></i>{{ $firstEvent->from_time->format('H:i') }} To {{ $firstEvent->to_time->format('H:i') }} <i class="fa-solid fa-calendar px-2 pt-1" style="color: #ccd2db;"></i>{{ $firstEvent->date->format('Y/m/d') }} </span>
                </div>
              </div>
            </div>
            @endif
            @if($events->count() > 0)
                @foreach ($events as $event)
                    <div class="side-events ms-5" >
                        <div class="event-label d-flex">
                            <div class="event-icon " style="padding-right: 1rem;">
                                <img height="100" src="{{ asset('events/' . $event->image) }}" />
                            </div>
                            <div class="event-title d-flex flex-column" >
                            <span style="width: 26rem; height: 4rem; font-size: 1.25rem; font-weight: 500;" class="d-flex align-items-end border-bottom pb-2 ps-5">{{ $event->title }}</span>
                            <span style="width: 26rem; height: 4rem; font-weight: 600; color: #BDBDBC;" class="d-flex align-items-start pt-2 ps-5"><i class="fa-regular fa-clock pe-2 pt-1" style="color: #BDBDBC;"></i>{{ $event->from_time->format('H:i') }} To {{ $event->to_time->format('H:i') }} <i class="fa-solid fa-calendar px-2 pt-1" style="color: #ccd2db;"></i>{{ $event->date->format('Y/m/d') }} </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
          </div>
        </div>
</div>
@endsection
