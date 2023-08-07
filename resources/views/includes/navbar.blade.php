<nav class="navbar navbar-expand-lg  m-0 justify-content-center  pt-4" style="position: sticky; top: 0; z-index: 1;">
        <div class="container m-0">
          <a class="navbar-brand" href="{{ route('welcome') }}"><img class="" style="filter: invert(100%);" src="https://www.isoc.pk/wp-content/uploads/2019/01/isco_logo_w.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto text-muted" style="height: 25px;">
              <li class="nav-item">
                <a class="nav-link border-end border-2 py-0 px-4" href="{{ route('welcome') }}">HOME</a>
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
                  <li class="py-1 border-bottom"><a class="dropdown-item" style=" font-weight: 700;" href="{{ route('past.events') }}">Past Events</a></li>
                  <li class="py-1 "><a class="dropdown-item" style=" font-weight: 700;" href="{{ route('upcoming.events') }}">Upcoming Events</a></li>
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
                    <li class="py-1 border-bottom">
                        <a href="{{ route('login') }}" class="dropdown-item" style=" font-weight: 700;">Member Login</a>
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
