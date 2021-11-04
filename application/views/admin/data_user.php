<div class="main-content">
        <section class="section">
          <div class="section-body">
            <?php echo $this->session->flashdata('message');  ?>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data User</h4>
                    <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambah_user"><i class="fas fa-plus"></i> Tambah User</button>
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
                            <th>Email</th>
                            <th>Status</th>
                            <th class="col-2">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no=1;
                          foreach($user as $usr) : ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $usr->nama ?></td>
                            <td><?php echo $usr->username ?></td>
                            <td><div class="badge badge-success badge-shadow"><?php echo $usr->status ?></div></td>
                            <td>
                              <?php echo anchor('admin/data_user/edit/' .$usr->id, '<div class="btn btn-success">Edit</div>') ?>
                              <div class="btn btn-danger ml-2" data-toggle="modal" data-target="#hapus_user<?php echo $usr->id ?>"> Hapus</div>
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

  <?php foreach($user as $usr) : ?>
      <div class="modal fade" id="hapus_user<?php echo $usr->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
            </div>
            <form action="<?php echo base_url('admin/data_user/hapus/') ?>" enctype="multipart/form-data" method="post">
              <div hidden="">
                        id_barang<input value="<?php echo $usr->id?>" type="text" name="id"><br>
                       
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

  <div class="modal fade" id="tambah_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input User</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url(). 'admin/data_user/tambah_aksi'; ?>" method="POST" enctype="multipart/form-data">

        <div class="form-grup">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-grup mt-2">
          <label>Email</label>
          <input type="email" name="username" class="form-control" required>
        </div>

        <div class="form-grup mt-2">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-grup mt-2">
          <label>Role</label>
          <select name="role_id" class="form-control" required>
           <option value="1">Admin</option>
           <option value="2">User</option>
          </select>
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