<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Barang</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Nama Barang</th>
                            <th>Detail</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th class="text-center col-3">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no=1;
                          foreach($barang as $brg) : ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $brg->nama_barang ?></td>
                            <td><?php echo $brg->detail ?></td>
                            <td><?php echo $brg->kategori ?></td>
                            <td>Rp.<?php echo $brg->harga ?></td>
                            <td><?php echo $brg->stok ?></td>
                            <td>
                              <a href="#" class="btn btn-primary ml-2">Detail</a>
                              <a href="#" class="btn btn-success ml-2">Edit</a>
                              <a href="#" class="btn btn-danger ml-2">Hapus</a>
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