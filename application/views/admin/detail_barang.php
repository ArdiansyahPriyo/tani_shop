<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail</h4>
              <div class="card-header-action">
                <a href="<?php echo base_url('admin/data_barang')?>" class="btn btn-primary">Kembali</a>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <?php foreach($barang as $brg) : ?>
                  <div class="col-md-4">
                    <img alt="image" width="200" height="250" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                    <table class="table table-bordered table-md">
                      <tr>
                        <th>Nama Produk</th>
                        <td><?php echo $brg->nama_barang ?></td>
                      </tr>

                      <tr>
                        <th>Detail Produk</th>
                        <td><?php echo $brg->detail ?></td>
                      </tr>

                      <tr>
                        <th>Kategori</th>
                        <td><?php echo $brg->kategori ?></td>
                      </tr>

                      <tr>
                        <th>Stok</th>
                        <td><?php echo $brg->stok ?></td>
                      </tr>

                      <tr>
                        <th>Harga</th>
                        <td><div class="badge badge-primary">Rp. <?php echo number_format($brg->harga,0,',','.') ?></div></td>
                      </tr>
                    </table>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
       </div>
      </div>
    </div>
  </section>
</div>
              