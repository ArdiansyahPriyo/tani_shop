<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Data</h4>
              <div class="card-header-action">
                <a href="<?php echo base_url('admin/invoice')?>" class="btn btn-primary">Kembali</a>
              </div>
            </div>
            <div class="card-body">
              <?php foreach($invoice as $inv) : ?>
              <form method="post" action="<?php echo base_url().'admin/invoice/update' ?>">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $inv->nama ?>">
                <input type="hidden" name="id" class="form-control" value="<?php echo $inv->id ?>">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $inv->alamat ?>">
              </div>
              
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                  <option><?php echo $inv->status ?></option>
                  <option>Sudah Dibayar</option>
                  <option>Belum Dibayar</option>
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