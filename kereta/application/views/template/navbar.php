
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">


          <div class="site-logo">
            <a href="<?= base_url();?>beranda"class="text-black"><span class="text-primary">JAKERPI</a>
          </div>

          <div class="col-12">
            <nav class="site-navigation text-center " role="navigation">

              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="<?= base_url();?>jadwal_krl" class="nav-link">Jadwal Kereta API</a></li>
              </ul>
            </nav>

          </div>


          <div class="toggle-button align-items-center d-flex">
            <a href="#" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">login</a>
                <a class="dropdown-item" href="<?= base_url();?>sign_in/logout">logout</a>
             </div>
            <a href="#" class="btn btn-primary ml-3" data-toggle="modal" data-target="#registerModal">Register</a>
            <a href="#" class="site-menu-toggle p-5 js-menu-toggle text-black d-inline-block d-lg-none d-flex"><span
                class="icon-menu h3 m-0"></span></a>

          </div>

        </div>
      </div>

    </header>