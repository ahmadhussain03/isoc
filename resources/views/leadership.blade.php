<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://www.isoc.pk/wp-content/uploads/2016/02/cropped-favicon-1-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>ISOC Pakistan – Internet Society Islamabad Chapter</title>
    <style>
        .dropdown:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-item {
            color: #BDBDBC;
            font-weight: bold;
            text-transform: uppercase;
        }

        .dropdown-item:hover {
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
                <input type="search" name="" id="" class=" h-100 ps-4 text-opacity-50 bg-transparent"
                    style="border: none; outline: none ; width: 17rem; font-size: 1rem;"
                    placeholder="Type here to search">
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
    <!-- main-content  -->
    <div class="leader-ship">

        <div class=" mb-3" style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/Muhammad Farhan khan.jpg" class="img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;">Engr. Muhammad Farhan khan – President</h5>
                        <p class="" style=" border-bottom: 1px solid lightgray;font-size: 14px;line-height: 24px;color:#666666">

                            He has served as the General Secretary of the Society. He has over 10 year of Professional
                            Industrial, Teaching and Research experience in a mix of Public and Private sector (in
                            Europe and Asia). He has authored 14+ International Scientific Publications. He is a member
                            of Pakistan Engineering Council, Internet Society, Irish Computer Society, Internet
                            Corporation for Assigned Names and Numbers – ICANN’s Root Server System Advisory Committee
                            (RSSAC) Caucus, and European Regional At-Large Organization (EURALO) Individuals
                            Association, At-Large Advisory Committee (ALAC) and IEEE. He has been a fellow of MEAC-SIG
                            2019, Rabat, Morocco, AprIGF 2020 Fellow, SANOG-35 and ICANN 67 fellow, ICANN 69 fellow held
                            in Cancun (Mexico) and Germany Respectively. He is also currently pursuing PhD and holds a
                            Master’s Degree in Telecom Engineering as well as Bachelor’s Degree in Computer Engineering.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mb-3 " style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/Madiha Shafique.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;">Madiha Shafique – Vice President </h5>
                        <p class="" style="
                    padding: 1rem;">
                        <p style="font-size: 14px;line-height: 24px;color:#666666">
                            is a solution focused Project Manager with 6+ years of experience in leading large-scale
                            technology projects from design to implementation. Lead, direct, guide, and manage in the
                            principles of Operational Excellence, and Skilled in Program and Project management
                            techniques.</p>
                        <p style="font-size: 14px;line-height: 24px;color:#666666">
                            Using her background of Bachelors in Software Engineering and Masters in Project Management
                            along with multiple certifications, she has delivered trainings of Project Management in
                            different universities of Pakistan and has been an active panelist of startup idea
                            challenges including Hult Prize. She also ran a startup named OrecticHub.
                        </p>
                        <p style="font-size: 14px;line-height: 24px;color:#666666">
                            Working towards automation and digitization, she is also having role of Digital Empowerment
                            Accelerator from Pakistan for Digital Cooperation Organization (DCO), nominated by Ministry
                            of Information Technology and Telecommunication-MoITT, and leading women empowerment related
                            initiatives. She has been an active contributor to the industry revolution and working with
                            IT/ITeS Sector Development, Startup Ecosystem Development, Policy Development and
                            Implementation and Digital Operational Excellency. </p>
                        <p style="border-bottom: 1px solid lightgray; padding-bottom: 2rem;font-size: 14px;line-height: 24px;color:#666666;">
                            Madiha is an Agile Project Manager who believes in agility and transformation. She has
                            expertise in team building and mentoring, performance management, strategic planning, and
                            capacity building</p>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mb-3 " style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/Alyshai Nadeem.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;">Alyshai Nadeem – General Secretary</h5>
                        <p class="c" style="border-bottom: 1px solid lightgray;
                    padding: 1rem;">

                        <p style="font-size: 14px;line-height: 24px;color:#666666">
                            A data scientist, researcher, and content creator with 6+ years of experience, Alyshai has
                            been a part of the Internet Society since 2018 and is currently the General Secretary.</p>

                        <p style="border-bottom: 1px solid lightgray; padding-bottom:2rem;font-size: 14px;line-height: 24px;color:#666666;">
                            She is a dedicated and resourceful individual with a strong commitment to social and
                            academic growth and development across multiple sectors.
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" mb-3" style="max-width: 100%;margin-left: 50px;margin-right: 50px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/Tahir Qaseem.jpg"  class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h5 class="" style="font-size: 14px;color: #666666;line-height: 24px;font-weight: bold;"> Mr Tahir Qaseem – Treasurer</h5>
                        <p class="" style=" border-bottom: 1px solid lightgray;font-size: 14px;line-height: 24px;color:#666666;">


                            He has done BS Electrical (Telecom Engineering) from COMSATS University. He has been an
                            active member of Internet Society Islamabad chapter and Global since 2017, He have been
                            selected as youth ambassdor program by internet society in 2018-2019, He has been awarded
                            with community networks training program by ISOC in 2020. He is having a vast experience in
                            radio network planning, optimization and data analysis (Worked with Alcatel-Lucent and
                            Huawei)
                            He have been proactive and devoted assistant manager at Wah Industries limited (Shot Gun
                            Ammunition Factory) a subsidiary of POF Wah Cantt, his motivation is in industrial
                            production and automation, which led him to
                            work with NUST University as an Industrial partner liaison with HEC Technology Development
                            Funds

                            He is also CEO of TQ design and Technology an IT resource company

                            He is Director Operations in Pvt chemical firm in Islamabad (Yoniflora) company.
                        </p>
                    </div>
                </div>
            </div>
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
                            Internet Society (ISOC) Pakistan Islamabad (PK IBD) Chapter is bring together members of
                            Internet society to advance and promote the general purpose and guiding principles of ISOC
                            by serving the interests of the global Internet community through a local presence. The
                            Bylaws of ISOC Pakistan Islamabad Chapter are available.
                        </p>
                    </div>



                    <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4" style="margin-top: -13px;">
                        <aside id="cms_recent_posts_events-3" class="widget cms-recent-posts">
                            <h3 class="text-white recent-event">Recent event</h3>
                            <article
                                class=" d-flex mt-3 clearfix post-1284 events type-events status-publish has-post-thumbnail hentry category-events-upcoming">
                                <div class="featured-image">
                                    <img width="100" height="70"
                                        src="https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-100x70.jpeg"
                                        class="attachment-thumbnail size-thumbnail wp-post-image event-images" alt=""
                                        srcset="https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-100x70.jpeg 100w, https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-770x537.jpeg 770w, https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-470x330.jpeg 470w"
                                        sizes="(max-width: 100px) 100vw, 100px">
                                </div>
                                <div class="post-element">
                                    <h5 class="entry-widget-title ms-4 recent-text" style="margin: 0px"><a
                                            href="https://www.isoc.pk/events/universal-acceptance-ua-day/"
                                            class="text-reset" style="text-decoration: none;">Universal Acceptance UA
                                            Day</a></h5>
                                </div>
                            </article>
                            <article
                                class="d-flex mt-3 clearfix post-1280 events type-events status-publish has-post-thumbnail hentry category-events-meetings">
                                <div class="featured-image">
                                    <img width="100" height="70"
                                        src="https://www.isoc.pk/wp-content/uploads/2023/03/agm-100x70.jpeg"
                                        class="attachment-thumbnail size-thumbnail wp-post-image event-images" alt=""
                                        srcset="https://www.isoc.pk/wp-content/uploads/2023/03/agm-100x70.jpeg 100w, https://www.isoc.pk/wp-content/uploads/2023/03/agm-470x330.jpeg 470w"
                                        sizes="(max-width: 100px) 100vw, 100px">
                                </div>
                                <div class="post-element">
                                    <h5 class="entry-widget-title ms-4 recent-text" style="margin: 0px"><a
                                            href="https://www.isoc.pk/events/annual-general-assembly-meeting-2/"
                                            class=" text-reset" style="text-decoration: none;">Annual General Assembly
                                            Meeting</a></h5>
                                </div>
                            </article>
                            <article
                                class="d-flex mt-2 clearfix post-1253 events type-events status-publish has-post-thumbnail hentry">
                                <div class="featured-image">
                                    <img width="100" height="70"
                                        src="https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-100x70.png"
                                        class="attachment-thumbnail size-thumbnail wp-post-image event-images" alt=""
                                        srcset="https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-100x70.png 100w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-768x535.png 768w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-1024x714.png 1024w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-624x435.png 624w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-470x330.png 470w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-600x418.png 600w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM.png 1564w"
                                        sizes="(max-width: 100px) 100vw, 100px">
                                </div>
                                <div class="post-element">
                                    <h5 class="entry-widget-title ms-4 recent-text" style="margin: 0px"><a
                                            href="https://www.isoc.pk/events/werise/" class=" text-reset"
                                            style="text-decoration: none;">WeRISE</a></h5>
                                </div>
                            </article>
                        </aside>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4" style="margin-top: -13px;">
                        <aside class="widget widget_recent_entries">
                            <h3 class="text-white recent-news">Recent News</h3>
                            <ul style="list-style: none; padding: 0; margin-top: -15px;" class="text-uppercase">
                                <li class="news-li">
                                    <a class="news-li-a"
                                        href="https://www.isoc.pk/2020/09/01/digital-connectivity-in-pakistan-by-mr-parvez-iftikhar-connect/">Digital
                                        Connectivity in Pakistan by Mr. Parvez Iftikhar connect</a>
                                </li>
                                <li class="news-li">
                                    <a class="news-li-a"
                                        href="https://www.isoc.pk/2020/07/01/isoc-pakistan-chapter-training-program-2020/">ISOC
                                        pakistan chapter training-program-2020</a>
                                </li>
                                <li class="news-li">
                                    <a class="news-li-a"
                                        href="https://www.isoc.pk/2020/06/26/pandemic-phishing-is-luring-many/">Pandemic
                                        phishing is luring many</a>
                                </li>
                                <li class="news-li">
                                    <a class="news-li-a"
                                        href="https://www.isoc.pk/2020/06/08/building-a-wireless-community-network-tq-network-2020-chapters-training-program/">Building
                                        a Wireless Community Network (TQ Network) 2020 Chapters Training Program</a>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h4 class="text-uppercase fw-bold mb-4 text-white" style="font-size: 18px;line-height: 30px;">
                            Contact</h4>
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
            <span class="footer-right-text text-uppercase">DESIGN AND DEVELOPED BY: <span class="fw-bold"
                    style="color: white;">ILOGICS PAKISTAN</span></span>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</body>

</html>
