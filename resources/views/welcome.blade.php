
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://www.isoc.pk/wp-content/uploads/2016/02/cropped-favicon-1-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>ISOC Pakistan – Internet Society Islamabad Chapter</title>
    <style>
      .dropdown:hover>.dropdown-menu {
        display: block;
      }
      .dropdown-item{
        color: #BDBDBC;
        font-weight: bold;
        text-transform: uppercase;
      }
      .dropdown-item:hover{
        background-color: #29af8a;
        color: #fff;
      }
      .dropdown>.dropdown-toggle:active {
        pointer-events: none;
      }
    </style>
</head>
  <body>
    <header class="d-flex justify-content-between border bg-transparent">
      <div class="left-header d-flex ">
        <div id="left-first-header" class="py-3 d-flex px-3">
          <div class="mail">
            <i class="fa-regular fa-envelope" style="color: #e0e2e5;"></i>
          </div>
          <div class="mailaddress">
            <span style="color: #BDBDBC;" class="fw-bold ps-2">INFO@ISOC.pk</span>
          </div>
        </div>
        <div id="left-second-header" class="py-3 px-4">
          <i class="fa-solid fa-phone" style="color: #e0e2e5; height: 0.75rem;"></i>
          <span style="color: #BDBDBC;" class="fw-bold ps-1">(+92)3336519169</span>
        </div>
      </div>
      <div class="right-header d-flex ">
        <div id="right-first-header" class="border-bottom-0 border-top-0 border-end border-start">
          <input type="search" name="" id="" class=" h-100 ps-4 text-opacity-50 bg-transparent" style="border: none; outline: none ; width: 17rem; font-size: 1rem;" placeholder="Type here to search">
          <i class="fa-solid fa-magnifying-glass pe-3" style="color: #e0e2e5; height: 1rem;"></i>
        </div>
        <div class="right-second-header d-flex align-items-center">
          <i class="fa-brands fa-twitter px-3" style="color: #e0e2e5; height:1.25rem;"></i>
          <i class="fa-brands fa-google-plus-g px-3" style="color: #e0e2e5; height: 1.25rem;"></i>
          <i class="fa-brands fa-facebook-f px-3" style="color: #e0e2e5; height: 1rem;"></i>
        </div>
    </header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  m-0 justify-content-center  pt-4" style="position: sticky; top: 0; z-index: 1;">
        <div class="container m-0">
          <a class="navbar-brand" href="#"><img class="" style="filter: invert(100%);" src="https://www.isoc.pk/wp-content/uploads/2019/01/isco_logo_w.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto text-muted" style="height: 25px;">
              <li class="nav-item">
                <a class="nav-link border-end border-2 py-0 px-4" href="#">HOME</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link border-end border-2 py-0 px-4" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">ABOUT US</a>
                <ul class="dropdown-menu rounded-0">
                  <li class="py-1 border-bottom"><a class="dropdown-item" style=" font-weight: 700;" href="#">What we do</a></li>
                  <li class="py-1 border-bottom"><a class="dropdown-item" style=" font-weight: 700;" href="{{ route('leadership') }}">Our Leadership</a></li>
                  <li class="py-1 "><a class="dropdown-item" style=" font-weight: 700;" href="{{ route('bod') }}">Board of Directors</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-2 py-0 px-4" href="#">MEETINGS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link border-end border-2 py-0 px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">EVENTS</a>
                <ul class="dropdown-menu rounded-0">
                  <li class="py-1 border-bottom"><a class="dropdown-item" style=" font-weight: 700;" href="{{ route('upcoming.events') }}">Past Events</a></li>
                  <li class="py-1 "><a class="dropdown-item" style=" font-weight: 700;" href="events.html">Upcoming Events</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link border-end border-2 py-0 px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Join Us</a>
                <ul class="dropdown-menu rounded-0">
                    <li class="py-1 border-bottom">
                        <a href="{{ route('register', ['member' => 'young']) }}" class="dropdown-item" style=" font-weight: 700;">Become Young Member</a>
                    </li>
                    <li class="py-1 border-bottom">
                        <a href="{{ route('register', ['member' => 'student']) }}" class="dropdown-item" style=" font-weight: 700;">Become Student Member</a>
                    </li>
                    <li class="py-1 border-bottom">
                        <a href="{{ route('register', ['member' => 'individual']) }}" class="dropdown-item" style=" font-weight: 700;">Become Individual Member</a>
                    </li>
                    <li class="py-1 border-bottom">
                        <a href="{{ route('register', ['member' => 'professional']) }}" class="dropdown-item" style=" font-weight: 700;">Become Professional Member</a>
                    </li>
                    <li class="py-1 border-bottom">
                        <a href="{{ route('register', ['member' => 'corporate']) }}" class="dropdown-item" style=" font-weight: 700;">Become Organization Member</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link border-end border-2 py-0 px-4" href="#" >RESOURCES</a>
                <ul class="dropdown-menu rounded-0">
                  <li class="py-1 border-bottom"><a class="dropdown-item" style=" font-weight: 700;" href="#">Publications</a></li>
                  <li class="py-1 border-bottom"><a class="dropdown-item" style=" font-weight: 700;" href="#">News</a></li>
                  <li class="py-1 "><a class="dropdown-item" style=" font-weight: 700;" href="#">Useful Links</a></li>
                </ul>
              </li>

            </ul>

          </div>
        </div>
      </nav>
      <!-- carousel -->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.isoc.pk/wp-content/uploads/2016/02/Islamabad_top_view-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5 class="text-start">Shaping Tomorrow !</h5>
              <p class="text-start">Our goal - Helping to shape the future of internet
                In Pakistan </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.isoc.pk/wp-content/uploads/2016/02/isoc_event.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5 class="text-start">Pakistan Digital Forum </h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.isoc.pk/wp-content/uploads/2019/01/AGM_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
         </div>
         <div class="container row container-1">
          <div class="card border-0" style="width: 23rem;">
              <div class="card-body">
                <h1 class="card-title fw-bold">01.</h1>
                <h4 class="card-subtitle fw-bold mb-2">OPPORTUNITIES</h4>
                <p class="card-text text-white">The Internet Society encourages innovation and fresh thinking. We provide grants and awards to relevant initiatives.</p>
                <a href="#" class="card-link">LEARN MORE</a>
              </div>
            </div>
            <div class="card border-0" style="width: 22rem;">
              <div class="card-body">
                <h1 class="card-title fw-bold">02.</h1>
                <h4 class="card-subtitle fw-bold mb-2">WHAT WE DO</h4>
                <p class="card-text text-white">ISOC Pakistan promote the open development, evolution, and use of the Internet for the benefit of all people.</p>
                <a href="#" class="card-link">LEARN MORE</a>
              </div>
            </div>
            <div class="card border-0" style="width: 22rem;">
              <div class="card-body">
                <h1 class="card-title fw-bold">03.</h1>
                <h4 class="card-subtitle fw-bold mb-2">GET INVOLVED</h4>
                <p class="card-text text-white">The membership of ISOC is open and (totally) free but there are nominal charges to join local chapters.</p>
                <a href="" class="card-link">LEARN MORE</a>
              </div>
            </div>
            <!-- SVGs -->
            <div class="container-activity d-flex flex-sm-column flex-md-column flex-lg-column flex-xl-row justify-content-around my-0">
              <div class="task-header d-flex flex-column justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
              </svg>
              <h1 class="task-number">20</h1>
              <span class="task-text">PROGRAMS</span>
            </div>
            <div class="task-header d-flex flex-column justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-calendar2" viewBox="0 0 16 16">
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
              <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
            </svg>
            <h1 class="task-number text-center">36</h1>
            <span class="task-text">EVENTS ORGANIZED</span>
          </div>
          <div class="task-header d-flex flex-column justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
          </svg>
          <h1 class="task-number">1130</h1>
          <span class="task-text">MEMBERS</span>
        </div>
        <div class="task-header d-flex flex-column justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-globe-central-south-asia" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM4.882 1.731a.482.482 0 0 0 .14.291.487.487 0 0 1-.126.78l-.291.146a.721.721 0 0 0-.188.135l-.48.48a1 1 0 0 1-1.023.242l-.02-.007a.996.996 0 0 0-.462-.04 7.03 7.03 0 0 1 2.45-2.027Zm-3 9.674.86-.216a1 1 0 0 0 .758-.97v-.184a1 1 0 0 1 .445-.832l.04-.026a1 1 0 0 0 .152-1.54L3.121 6.621a.414.414 0 0 1 .542-.624l1.09.818a.5.5 0 0 0 .523.047.5.5 0 0 1 .724.447v.455a.78.78 0 0 0 .131.433l.795 1.192a1 1 0 0 1 .116.238l.73 2.19a1 1 0 0 0 .949.683h.058a1 1 0 0 0 .949-.684l.73-2.189a1 1 0 0 1 .116-.238l.791-1.187A.454.454 0 0 1 11.743 8c.16 0 .306.084.392.218.557.875 1.63 2.282 2.365 2.282a.61.61 0 0 0 .04-.001 7.003 7.003 0 0 1-12.658.905Z"/>
        </svg>
        <h1 class="task-number">A</h1>
        <span class="task-text">CHAPTER RANKING</span>
      </div>
      <!-- Text-Area -->
            </div>
            <div class="text-container d-flex flex-sm-column flex-md-column flex-lg-column flex-xl-row" style="margin-top: 80px;">
              <div class="" style="flex:75%;">
                <span class="text-left">Internet Society (ISOC) Pakistan Islamabad (PK IBD) Chapter brings together members of the community at large to advance and promote the vision and guiding principles of ISOC through local presence. We spearhead the community development and capacity building initiatives through education, projects, awareness sessions and stakeholder engagement. The Bylaws of ISOC Pakistan Islamabad Chapter are available.</span>
              </div>
        <div class="text-right">
          <div>
            <h3 class="text-head">Vision</h3>
            <p class="text-child">The Internet is for everyone.</p>
          </div>
          <div>
            <h3 class="text-head">Mission</h3>
            <p class="text-child">To promote the open development, evolution, and use of the Internet for the benefit of all people throughout the world.</p>
          </div>
        </div>

        </div>
            </div>
      </div>
<!-- Events -->
    <div class="div-events d-flex justify-content-center">
    <div class="main-events d-flex flex-column " >
        <div class="events my-5 d-flex" style="background-color: #f7f7f7;">
            <span class="" style="height: 100%; width: 10px; background-color: #29af8a;"></span>
            <span class="ps-3 py-3" style="font-size: 24px; color: #29af8a; font-weight: bold;line-height: 36px; ">LATEST EVENTS</span>
        </div>
        @if($event)
            <div class="events-mid d-flex justify-content-between flex-sm-column flex-xl-row">
                <div class="card bg-transparent border-0 me-4">
                    <img src="{{ asset('events/' . $event->image) }}" alt="" style="height: 50vh; width: 34rem;">
                    <div class="event-label d-flex">
                    <div class="event-icon " style="padding-right: 1rem; background-color: #29af8a;">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 5rem; height:7rem; color: #fff; margin-left: 1rem;" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                    </div>
                    <div class="event-title d-flex flex-column" >
                        <span style="width: 26rem; height: 4rem; font-size: 1.25rem; font-weight: 500; color: #0c0c0c; " class="d-flex align-items-end border-bottom pb-2 ps-5">{{ $event->title }}</span>
                        <span style="width: 26rem; height: 4rem; font-weight: 600; color: #BDBDBC;" class="d-flex align-items-start pt-2 ps-5"><i class="fa-regular fa-clock pe-2 pt-1" style="color: #BDBDBC;"></i>{{ $event->from_time->format('H:i') }} To {{ $event->to_time->format('H:i') }} <i class="fa-solid fa-calendar px-2 pt-1" style="color: #ccd2db;"></i>{{ $event->date->format('Y/m/d') }} </span>
                    </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    </div>

<!-- footer -->
<footer class="text-center text-lg-start text-muted" style="background-color: #2e2e2e;">
  <section class="">
    <div class="container text-center text-md-start mt-5">

      <div class="row" style="padding-top: 100px;">

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">

          <span class="footer-about fw-bold text-uppercase text-white">
            About isoc
          </span>
          <p class="footer-about-text mt-5">
            Internet Society (ISOC) Pakistan Islamabad (PK IBD) Chapter is bring together members of Internet society to advance and promote the general purpose and guiding principles of ISOC by serving the interests of the global Internet community through a local presence. The Bylaws of ISOC Pakistan Islamabad Chapter are available.
          </p>
        </div>



        <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4" style="margin-top: -13px;">
          <aside id="cms_recent_posts_events-3" class="widget cms-recent-posts"><h3 class="text-white recent-event">Recent event</h3>
            <article class=" d-flex mt-3 clearfix post-1284 events type-events status-publish has-post-thumbnail hentry category-events-upcoming">
            <div class="featured-image">
            <img width="100" height="70" src="https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-100x70.jpeg" class="attachment-thumbnail size-thumbnail wp-post-image event-images" alt="" srcset="https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-100x70.jpeg 100w, https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-770x537.jpeg 770w, https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-470x330.jpeg 470w" sizes="(max-width: 100px) 100vw, 100px">                        </div>
        <div class="post-element">
            <h5 class="entry-widget-title ms-4 recent-text" style="margin: 0px"><a href="https://www.isoc.pk/events/universal-acceptance-ua-day/" class="text-reset" style="text-decoration: none;">Universal Acceptance UA Day</a></h5>
            </div>
            </article>
            <article class="d-flex mt-3 clearfix post-1280 events type-events status-publish has-post-thumbnail hentry category-events-meetings">
                        <div class="featured-image">
            <img width="100" height="70" src="https://www.isoc.pk/wp-content/uploads/2023/03/agm-100x70.jpeg" class="attachment-thumbnail size-thumbnail wp-post-image event-images" alt="" srcset="https://www.isoc.pk/wp-content/uploads/2023/03/agm-100x70.jpeg 100w, https://www.isoc.pk/wp-content/uploads/2023/03/agm-470x330.jpeg 470w" sizes="(max-width: 100px) 100vw, 100px">                        </div>
                    <div class="post-element">
            <h5 class="entry-widget-title ms-4 recent-text" style="margin: 0px"><a href="https://www.isoc.pk/events/annual-general-assembly-meeting-2/" class=" text-reset" style="text-decoration: none;">Annual General Assembly Meeting</a></h5>
            </div>
            </article>
            <article class="d-flex mt-2 clearfix post-1253 events type-events status-publish has-post-thumbnail hentry">
                        <div class="featured-image">
            <img width="100" height="70" src="https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-100x70.png" class="attachment-thumbnail size-thumbnail wp-post-image event-images" alt="" srcset="https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-100x70.png 100w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-768x535.png 768w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-1024x714.png 1024w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-624x435.png 624w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-470x330.png 470w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-600x418.png 600w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM.png 1564w" sizes="(max-width: 100px) 100vw, 100px">                        </div>
                    <div class="post-element">
            <h5 class="entry-widget-title ms-4 recent-text" style="margin: 0px"><a href="https://www.isoc.pk/events/werise/" class=" text-reset" style="text-decoration: none;">WeRISE</a></h5>
            </div>
            </article>
</aside>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4" style="margin-top: -13px;">
          <aside class="widget widget_recent_entries">
            <h3 class="text-white recent-news">Recent News</h3>
            <ul style="list-style: none; padding: 0; margin-top: -15px;" class="text-uppercase">
              <li class="news-li">
                <a class="news-li-a" href="https://www.isoc.pk/2020/09/01/digital-connectivity-in-pakistan-by-mr-parvez-iftikhar-connect/">Digital Connectivity in Pakistan by Mr. Parvez Iftikhar connect</a>
              </li>
            <li class="news-li">
              <a class="news-li-a" href="https://www.isoc.pk/2020/07/01/isoc-pakistan-chapter-training-program-2020/">ISOC pakistan chapter training-program-2020</a>
            </li>
            <li class="news-li" >
              <a class="news-li-a" href="https://www.isoc.pk/2020/06/26/pandemic-phishing-is-luring-many/">Pandemic phishing is luring many</a>
            </li>
            <li class="news-li">
              <a class="news-li-a" href="https://www.isoc.pk/2020/06/08/building-a-wireless-community-network-tq-network-2020-chapters-training-program/">Building a Wireless Community Network (TQ Network) 2020 Chapters Training Program</a>
            </li>
</ul>
</aside>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <h4 class="text-uppercase fw-bold mb-4 text-white" style="font-size: 18px;line-height: 30px;">Contact</h4>
          <p style="color: #666666;"><i class="fas fa-home me-3 mt-3"></i> RISE - Suit # 7,
            Ground floor,
            Evacuee Trust Complex,
            Agha Khan Road F-5/1 Islamabad.</p>
          <p style="color: #666666;">
            <i class="fas fa-envelope me-3"></i>
            info@isoc.pk
          </p>
          <p style="color: #666666;"><i class="fas fa-phone me-3"></i> (+92)3336519169</p>

        </div>
      </div>
    </div>
  </section>
  <div class="d-flex pb-1 justify-content-between text-white copy-text">
    <span class="footer-left-text text-uppercase"> Copyright © 2019,All rights Reserved</span>
    <span class="footer-right-text text-uppercase">DESIGN AND DEVELOPED BY: <span class="fw-bold" style="color: white;">ILOGICS PAKISTAN</span></span>
    </div>
</footer>
  <!-- Footer -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
