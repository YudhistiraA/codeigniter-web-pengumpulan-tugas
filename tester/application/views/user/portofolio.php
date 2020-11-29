<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-9 col-sm-6">

<a href="#"></a>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-success">
        <div class="card-icon">
          <i class="material-icons">assignment</i>
        </div>
        <h5 class="card-titile"> Portofolio </h5>
        <p>Daftar Portofolio Project Anda</p>
      </div>
      

      <div class="card-body">
        <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
                     <th>No</th>
                     <th>nama</th>
                      <th>Deskripsi</th>
                      <th>gambar</th>
                      <th>Waktu Mulai</th>
                      <th>waktu selesai</th>
                      
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($portofolio as $p) : ?>
                      <tr>
                        <td><?= $i;?></td>
                        <td><?= $p->nama_project ?></td>
                        <td><?= $p->deskripsi_projek ?></td>
                        <td><img src="<?= base_url('./project/'). $p->image;?>"width="250px" height="200px" ></td>
                        <td><?=$p->date_created; ?></td>
                        <td><?= $p->date_done; ?></td>
                       
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
