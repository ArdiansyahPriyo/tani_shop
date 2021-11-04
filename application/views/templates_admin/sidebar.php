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
              <div class="dropdown-title"><?php echo $this->session->userdata('nama') ?></div>
              <a href="#" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> <?php echo $this->session->userdata('username') ?>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#logout"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url('admin/dashboard')?>"> <img alt="image" src="<?php echo base_url()?>assets/img/st-logo.png" class="header-logo" /> <span
                class="logo-name">Toko Tani</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            <li <?=$this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="dropdown active"' : 'class="dropdown"'?>>
              <a href="<?php echo base_url('admin/dashboard')?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li <?=$this->uri->segment(2) == 'data_barang' ? 'class="dropdown active"' : 'class="dropdown"'?>>
              <a href="<?php echo base_url('admin/data_barang')?>" class="nav-link"><i data-feather="package"></i><span>Data Barang</span></a>
            </li>
            <li <?=$this->uri->segment(2) == 'invoice' ? 'class="dropdown active"' : 'class="dropdown"'?>>
              <a href="<?php echo base_url('admin/invoice') ?>" class="nav-link"><i data-feather="shopping-cart"></i><span>Pesanan Masuk</span></a>
            </li>
            <li <?=$this->uri->segment(2) == 'data_pembayaran' ? 'class="dropdown active"' : 'class="dropdown"'?>>
              <a href="<?php echo base_url('admin/data_pembayaran') ?>" class="nav-link"><i data-feather="dollar-sign"></i><span>Pembayaran</span></a>
            </li>
            <li class="dropdown ">
              <a href="index.html" class="nav-link"><i data-feather="phone-forwarded"></i><span>Contact Us</span></a>
            </li>
            <li <?=$this->uri->segment(2) == 'data_user' ? 'class="dropdown active"' : 'class="dropdown"'?>>
              <a href="<?php echo base_url('admin/data_user') ?>" class="nav-link"><i data-feather="settings"></i><span>User Setting</span></a>
            </li>
            
          </ul>
        </aside>
      </div>

      <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">LOGOUT</h5>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin akan keluar ?</p>

                                    <div class="modal-footer">
                                        <?php echo anchor('auth/logout', '<div class="btn btn-primary btn">Keluar</div>') ?>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>