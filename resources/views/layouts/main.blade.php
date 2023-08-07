
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
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
