
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-9 col-sm-6">



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
                        
                      </tr>

                      <?php $i++; ?>
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
</div>
</div>
</div>
