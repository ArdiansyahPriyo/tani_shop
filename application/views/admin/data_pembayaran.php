<div class="main-content">
        <section class="section">
          <div class="section-body">
            <?php echo $this->session->flashdata('message');  ?>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Pembayaran</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i
                          class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
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
                              <a href="#" class="btn btn-success">Cetak</a>
                              <div class="btn btn-danger ml-2" data-toggle="modal" data-target="#hapus_pembayaran<?php echo $pbr->id ?>"> Hapus</div>
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
          </div>
        </section>
      </div>

<?php foreach($pembayaran as $pbr) : ?>
      <div class="modal fade" id="hapus_pembayaran<?php echo $pbr->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
            </div>
            <form action="<?php echo base_url('admin/data_pembayaran/hapus/') ?>" enctype="multipart/form-data" method="post">
              <div hidden="">
                        id_barang<input value="<?php echo $pbr->id?>" type="text" name="id"><br>
                       
                      </div>

              <div class="modal-body">
                <p>Apakah Anda yakin akan menghapus data ini?</p>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-danger">Iya</button>
                  <button type="close" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>