 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Pesanan</h4>
                    <div class="card-header-action">
                      <a href="<?php echo base_url('admin/invoice')?>" class="btn btn-primary">Kembali</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="badge badge-success mb-2"><?php echo $invoice->nama ?></div> 
                    <div class="table-responsive">
                    <table class="table table-bordered table-md">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Produk</th>
                          <th scope="col">Jumlah Pesanan</th>
                          <th scope="col">Harga Satuan</th>
                          <th scope="col">Sub Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no=1;
                        $total=0;
                        foreach($pesanan as $psn) :
                          $subtotal = $psn->jumlah * $psn->harga;
                          $total += $subtotal;
                         ?>
                        <tr>
                          <th scope="row"><?php echo $no++ ?></th>
                          <td><?php echo $psn->nama_barang ?></td>
                          <td><?php echo $psn->jumlah ?></td>
                          <td>Rp. <?php echo number_format($psn->harga,0,',','.') ?></td>
                          <td>Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                          <td colspan="4" align="center"><b>Total Bayar</b></td>
                          <td align="left"><b>Rp. <?php echo number_format($total,0,',','.') ?></b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
               