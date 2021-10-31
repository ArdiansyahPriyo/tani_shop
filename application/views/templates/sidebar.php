<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Sri Tani<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Produk</a></li>
          <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Pestisida</a></li>
              <li><a href="#">Pupuk</a></li>
              <li><a href="#">Benih dan Bibit</a></li>
              <li><a href="#">Perlengkapan Pertanian</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services">Bayar</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Keranjang</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <ul>
            <li>
              <?php if($this->session->userdata('username')) { ?>
                <div> <a>Selamat Datang <?php echo $this->session->userdata('username') ?></a></div>
            </li>
            <li><?php echo anchor('auth/logout','<div class="nav-link scrollto">Logout</div>') ?></li>
          <?php }else{ ?>
            <li><?php echo anchor('auth','<div class="nav-link scrollto">Login</div>') ?></li>

          <?php } ?>
          </ul>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->