<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">karyawan</p>

                  <h3 class="card-title">
                    <small><?= $karyawan; ?></small>

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <i class="material-icons">person</i>
                     rekan kerja
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">tugas</p>
                  <h3 class="card-title"><?= $project; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> tugas yang belum di review
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">selesai</p>
                  <h3 class="card-title"> <?= $reviewed; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> tugas yang sudah di review
                  </div>
                </div>
              </div>
            </div>

            </div>
          </div>
          <a href="#"></a>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h5 class="card-titile"> Deathline & Jobdesk</h5>
                </div>
                <div class="card-body">
                  <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Nama Project</th>
                      <th>Deskripsi</th>
                      <th>Status</th>
                      <th>Waktu Mulai</th>
                      <th>Deathline</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($task as $p) : ?>
                      <tr>
                        <td><?= $i;?></td>
                        <td><?= $p->nama ?></td>
                        <td><?= $p->deskripsi_project ?></td>
                        <td><?= $p->status; ?></td>
                        <td><?= $p->date_created; ?></td>
                        <td><?= $p->deathline; ?></td>
                        <td>
                          <a href="<?php echo site_url('admin/hapus/'.$p->id);?>" class="btn btn-md btn-danger">Delete</a>
                          <a href="<?php echo site_url('admin/edit/'.$p->id);?>"class="btn btn-md btn-warning">Edit</a>
                          <a href="<?php echo site_url('admin/nilai/'.$p->nama);?>"class="btn btn-md btn-primary">nilai</a>
                        </td>
                      </tr>

                      <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                    <a href="<?php echo base_url('admin/add');?>" class="btn btn-md btn-success" >Tambah</a>
                  </table>
                </div>
                </div>
              </div>
            </div>
            <!-- Button trigger modal -->
<!-- Modal -->
