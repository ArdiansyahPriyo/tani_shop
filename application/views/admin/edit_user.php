<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Data</h4>
              <div class="card-header-action">
                <a href="<?php echo base_url('admin/data_user')?>" class="btn btn-primary">Kembali</a>
              </div>
            </div>
            <div class="card-body">
              <?php foreach($user as $usr) : ?>
              <form method="post" action="<?php echo base_url().'admin/data_user/update' ?>">
              <div class="form-group">
                <label>Nama User</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $usr->nama ?>" required>
                <input type="hidden" name="id" class="form-control" value="<?php echo $usr->id ?>">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="username" class="form-control" value="<?php echo $usr->username ?>" required>
              </div>
              <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role_id">
                  <?php if ($usr->role_id == 1) { ?>
                    <option><?php echo "Admin"?></option> 
                  <?php  }else{
                   ?><option><?php echo "User"?></option>
                  <?php } ?>
                   <option value="1">Admin</option>
                  <option value="2">User</option>
                </select>
              </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary mr-1" type="submit">Simpan</button>
            </div>
          </form>
          <?php endforeach; ?>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>