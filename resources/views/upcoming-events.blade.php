<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
  <nav class="navbar navbar-expand-lg  m-0 justify-content-center bg-white  pt-4" style="position: sticky; top: 0; z-index: 1;">
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
                <li class="py-1 border-bottom"><a class="dropdown-item" style=" font-weight: 700;" href="leader.html">Our Leadership</a></li>
                <li class="py-1 "><a class="dropdown-item" style=" font-weight: 700;" href="bod.html">Board of Directors</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link border-end border-2 py-0 px-4" href="#">MEETINGS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link border-end border-2 py-0 px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">EVENTS</a>
              <ul class="dropdown-menu rounded-0">
                <li class="py-1 border-bottom"><a class="dropdown-item" style=" font-weight: 700;" href="#">Past Events</a></li>
                <li class="py-1 "><a class="dropdown-item" style=" font-weight: 700;" href="events.html">Upcoming Events</a></li>
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
            <li class="nav-item">
              <a class="nav-link py-0 px-4" href="#">CONTACT</a>
            </li>
          </ul>
          <div class="dropdown" style="position: static;">
            <button
            class="btn dropdown-toggle fw-bold"
            type="button"
            id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false" style="background-color: #29af8a; color: #fff;">
            Join us
          </button>
          <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton" style="margin-left: -14rem;">
            <li><a class="dropdown-item" href="#">Become an Individual Member</a></li>
            <li><a class="dropdown-item" href="#">Become an Organization Member</a></li>
            <li><a class="dropdown-item" href="#">Become a Partner</a></li>
            <li><a class="dropdown-item" href="#">Member login</a></li>
          </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="div-events d-flex justify-content-center">
        <div class="main-events d-flex flex-column " >
          <div class="events my-5 d-flex" style="background-color: #e0e2e5;">
            <span class="" style="height: 100%; width: 10px; background-color: #29af8a;"></span>
            <span class="ps-3 py-3" style="font-size: x-large; color: #29af8a; font-weight: 500; ">LATEST EVENTS</span>
          </div>
          <div class="events-mid d-flex justify-content-between">
            <div class="card bg-transparent border-0 me-4">
              <img src="https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-100x70.jpeg" style="height: 50vh; width: 34rem;" class="" alt="" srcset="https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-100x70.jpeg 100w, https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-770x537.jpeg 770w, https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-470x330.jpeg 470w">
              <div class="event-label d-flex">
                <div class="event-icon " style="padding-right: 1rem; background-color: #29af8a;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 5rem; height:7rem; color: #fff; margin-left: 1rem;" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>
                </div>
                <div class="event-title d-flex flex-column" >
                  <span style="width: 26rem; height: 4rem; font-size: 1.25rem; font-weight: 500;" class="d-flex align-items-end border-bottom pb-2 ps-5">UNIVERSAL ACCEPTANCE UA DAY</span>
                  <span style="width: 26rem; height: 4rem; font-weight: 600; color: #BDBDBC;" class="d-flex align-items-start pt-2 ps-5"><i class="fa-regular fa-clock pe-2 pt-1" style="color: #BDBDBC;"></i>3:00 To 7:00 <i class="fa-solid fa-location-dot px-2 pt-1" style="color: #ccd2db;"></i>ISLAMABAD,PAKISTAN </span>
                </div>
              </div>
            </div>
            <div class="side-events ms-5" >
              <div class="event-label d-flex">
                <div class="event-icon " style="padding-right: 1rem; background-color: #29af8a;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 5rem; height:7rem; color: #fff; margin-left: 1rem;" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>
                </div>
                <div class="event-title d-flex flex-column" >
                  <span style="width: 26rem; height: 4rem; font-size: 1.25rem; font-weight: 500;" class="d-flex align-items-end border-bottom pb-2 ps-5">UNIVERSAL ACCEPTANCE UA DAY</span>
                  <span style="width: 26rem; height: 4rem; font-weight: 600; color: #BDBDBC;" class="d-flex align-items-start pt-2 ps-5"><i class="fa-regular fa-clock pe-2 pt-1" style="color: #BDBDBC;"></i>3:00 To 7:00 <i class="fa-solid fa-location-dot px-2 pt-1" style="color: #ccd2db;"></i>ISLAMABAD,PAKISTAN </span>
                </div>
              </div>
              <div class="event-label d-flex mt-3">
                <div class="event-icon " style="padding-right: 1rem; background-color: #29af8a;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 5rem; height:7rem; color: #fff; margin-left: 1rem;" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>
                </div>
                <div class="event-title d-flex flex-column" >
                  <span style="width: 26rem; height: 4rem; font-size: 1.25rem; font-weight: 500;" class="d-flex align-items-end border-bottom pb-2 ps-5">UNIVERSAL ACCEPTANCE UA DAY</span>
                  <span style="width: 26rem; height: 4rem; font-weight: 600; color: #BDBDBC;" class="d-flex align-items-start pt-2 ps-5"><i class="fa-regular fa-clock pe-2 pt-1" style="color: #BDBDBC;"></i>3:00 To 7:00 <i class="fa-solid fa-location-dot px-2 pt-1" style="color: #ccd2db;"></i>ISLAMABAD,PAKISTAN </span>
                </div>
              </div>
              <div class="event-label d-flex mt-3">
                <div class="event-icon " style="padding-right: 1rem; background-color: #29af8a;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 5rem; height:7rem; color: #fff; margin-left: 1rem;" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>
                </div>
                <div class="event-title d-flex flex-column" >
                  <span style="width: 26rem; height: 4rem; font-size: 1.25rem; font-weight: 500;" class="d-flex align-items-end border-bottom pb-2 ps-5">UNIVERSAL ACCEPTANCE UA DAY</span>
                  <span style="width: 26rem; height: 4rem; font-weight: 600; color: #BDBDBC;" class="d-flex align-items-start pt-2 ps-5"><i class="fa-regular fa-clock pe-2 pt-1" style="color: #BDBDBC;"></i>3:00 To 7:00 <i class="fa-solid fa-location-dot px-2 pt-1" style="color: #ccd2db;"></i>ISLAMABAD,PAKISTAN </span>
                </div>
              </div>
              <div class="event-label d-flex mt-3">
                <div class="event-icon " style="padding-right: 1rem; background-color: #29af8a;">
                  <svg xmlns="http://www.w3.org/2000/svg" style="width: 5rem; height:7rem; color: #fff; margin-left: 1rem;" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>
                </div>
                <div class="event-title d-flex flex-column" >
                  <span style="width: 26rem; height: 4rem; font-size: 1.25rem; font-weight: 500;" class="d-flex align-items-end border-bottom pb-2 ps-5">UNIVERSAL ACCEPTANCE UA DAY</span>
                  <span style="width: 26rem; height: 4rem; font-weight: 600; color: #BDBDBC;" class="d-flex align-items-start pt-2 ps-5"><i class="fa-regular fa-clock pe-2 pt-1" style="color: #BDBDBC;"></i>3:00 To 7:00 <i class="fa-solid fa-location-dot px-2 pt-1" style="color: #ccd2db;"></i>ISLAMABAD,PAKISTAN </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- footer  -->
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
</body>
</html>
