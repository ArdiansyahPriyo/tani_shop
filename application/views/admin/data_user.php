<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data User</h4>
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
                            <th>Username</th>
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
                              <a href="#" class="btn btn-success">Edit</a>
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