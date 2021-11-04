<div class="main-content">
        <section class="section">
          <div class="section-body">
            <?php echo $this->session->flashdata('message');  ?>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Invoice</h4>
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
                              <?php echo anchor('admin/invoice/detail/' .$inv->id, '<div class="btn btn-primary ml-2">Detail</div>') ?>
                              <?php echo anchor('admin/invoice/edit/' .$inv->id, '<div class="btn btn-success ml-2">Edit</div>') ?>
                              <?php echo anchor('admin/invoice/report_detail/' .$inv->id, '<div class="btn btn-warning ml-2">Report</div>') ?>
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