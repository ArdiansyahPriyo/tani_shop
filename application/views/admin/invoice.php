<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Invoice</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Nama Pemesan</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Jasa Pengiriman</th>
                            <th>Metode Pembayaran</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Batas Pembayaran</th>
                            <th>Status</th>
                            <th class="text-center col-3">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no=1;
                          foreach($invoice as $inv) : ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $inv->nama ?></td>
                            <td><?php echo $inv->alamat ?></td>
                            <td><?php echo $inv->no_hp ?></td>
                            <td><?php echo $inv->jasa_pengiriman ?></td>
                            <td><?php echo $inv->metode_pembayaran ?></td>
                            <td><?php echo $inv->tanggal_pesan ?></td>
                            <td><?php echo $inv->batas_bayar ?></td>
                            <td><?php echo $inv->status ?></td>
                            <td>
                              <a href="#" class="btn btn-primary ml-2">Detail</a>
                              <a href="#" class="btn btn-success ml-2">Edit</a>
                              <a href="#" class="btn btn-warning ml-2">Hapus</a>
                            </td>
                          </tr>
                          <?php endforeach; ?>
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