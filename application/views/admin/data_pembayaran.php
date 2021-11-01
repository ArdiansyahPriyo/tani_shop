<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Pembayaran</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Nama User</th>
                            <th>Tanggal</th>
                            <th>Bukti Bayar</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no=1;
                          foreach($pembayaran as $pbr) : ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $pbr->nama ?></td>
                            <td><?php echo $pbr->tanggal ?></td>
                            <td><div class="btn btn-primary"> Lihat</div></td>
                            <td>
                              <a href="#" class="btn btn-danger">Hapus</a>
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