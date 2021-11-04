<div class="main-content">
        <section class="section">
          <div class="section-body">
            <?php echo $this->session->flashdata('message');  ?>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Barang</h4>
                    <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus"></i> Tambah Barang</button>
                    <button class="btn btn-icon icon-left btn-success mr-1"><i class="fa fa-download"></i> Report</button>
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
                            <td><div class="badge badge-primary badge-shadow">Rp.<?php echo $brg->harga ?></div></td>
                            <td><?php echo $brg->stok ?></td>
                            <td>
                              <?php echo anchor('admin/data_barang/detail/' .$brg->id_barang, '<div class="btn btn-primary ml-2">Detail</div>') ?>
                              <?php echo anchor('admin/data_barang/edit/' .$brg->id_barang, '<div class="btn btn-success ml-2">Edit</div>') ?>
                              <div class="btn btn-danger ml-2" data-toggle="modal" data-target="#hapus_barangs<?php echo $brg->id_barang ?>"> Hapus</div>
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

      <?php foreach($barang as $brg) : ?>
      <div class="modal fade" id="hapus_barangs<?php echo $brg->id_barang?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
            </div>
            <form action="<?php echo base_url('admin/data_barang/hapus/') ?>" enctype="multipart/form-data" method="post">
              <div hidden="">
                        id_barang<input value="<?php echo $brg->id_barang?>" type="text" name="id_barang"><br>
                       
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
    
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Barang</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="POST" enctype="multipart/form-data">

        <div class="form-grup">
          <label>Nama Barang</label>
          <input type="text" name="nama_barang" class="form-control" required>
        </div>

        <div class="form-grup">
          <label>Detail</label>
          <textarea type="text" name="detail" class="form-control" required></textarea>
        </div>

        <div class="form-grup">
          <label>Kategori</label>
          <select name="kategori" class="form-control" required>
           <option value="pupuk">Pupuk</option>
           <option value="pestisida">Pestisida</option> 
           <option value="benih">Benih</option>
           <option value="perlengkapan">Perlengkapan Pertanian</option>
          </select>
        </div>

        <div class="form-grup">
          <label>Harga</label>
          <input type="number" name="harga" class="form-control" required>
        </div>

        <div class="form-grup">
          <label>Stok</label>
          <input type="number" name="stok" class="form-control" required>
        </div>

        <div class="form-grup">
          <label>Gambar</label><br>
          <input type="file" name="gambar" class="form-control" required>
        </div>
      
      </div>

      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
     
    </div>
  </div>
</div>

