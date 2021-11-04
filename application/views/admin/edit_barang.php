<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Data</h4>
              <div class="card-header-action">
                <a href="<?php echo base_url('admin/data_barang')?>" class="btn btn-primary">Kembali</a>
              </div>
            </div>
            <div class="card-body">
              <?php foreach($barang as $brg) : ?>
              <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $brg->nama_barang ?>">
                <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
              </div>
              <div class="form-group">
                <label>Detail</label>
                <input type="text" name="detail" class="form-control" value="<?php echo $brg->detail ?>">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option value="<?php echo $brg->kategori ?>"><?php echo $brg->kategori ?></option>
                  <option value="pupuk">Pupuk</option>
                  <option value="pestisida">Pestisida</option>
                  <option value="benih">Benih</option>
                  <option value="perlengkapan">Perlengkapan Pertanian</option>
                </select>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo $brg->harga ?>">
              </div>
              <div class="form-group">
                <label>Stok</label>
                <input type="text" class="form-control" name="stok" value="<?php echo $brg->stok ?>">
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