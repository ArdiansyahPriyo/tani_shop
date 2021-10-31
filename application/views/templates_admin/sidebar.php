<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo base_url()?>assets_admin/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="<?php echo base_url()?>assets_admin/img/logo.png" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="package"></i><span>Data Barang</span></a>
            </li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="shopping-cart"></i><span>Pesanan Masuk</span></a>
            </li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="dollar-sign"></i><span>Pembayaran</span></a>
            </li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="phone-forwarded"></i><span>Contact Us</span></a>
            </li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="settings"></i><span>User Setting</span></a>
            </li>
            
          </ul>
        </aside>
      </div>