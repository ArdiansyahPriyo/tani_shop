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
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo base_url('beranda') ?>">Sri Tani<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo base_url('home') ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('produk') ?>">Produk</a></li>
          <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url('kategori/pestisida') ?>">Pestisida</a></li>
              <li><a href="<?php echo base_url('kategori/pupuk') ?>">Pupuk</a></li>
              <li><a href="<?php echo base_url('kategori/benih') ?>">Benih dan Bibit</a></li>
              <li><a href="<?php echo base_url('kategori/perlengkapan') ?>">Perlengkapan Pertanian</a></li>
            </ul>
          </li>
          <li><a class="nav-link " href="<?php echo base_url('pembayaran/bayar') ?>">Bayar</a></li>
          <li><a class="nav-link  " href="#">Keranjang</a></li>
          <li><a class="nav-link " href="#">Contact</a></li>
          
          <?php if($this->session->userdata('username')) { ?>
            <li>|</li>
            <li><div> <a>Selamat Datang <?php echo $this->session->userdata('nama') ?></a></div></li>
            <li><a href="<?php echo base_url('auth/logout')?>"  class="nav-link scrollto text-primary">Logout</a></li>
          <?php }else{ ?>
            <li><a href="<?php echo base_url('auth') ?>" class="nav-link scrollto text-primary">Login</a></li>
          <?php } ?>
          
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->