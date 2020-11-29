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
        <h5 class="card-titile"> assignment </h5>
        <p>Daftar pengumpulan project</p>
      </div>
      

      <div class="card-body">
        <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
                     <th>No</th>
                   
                      <th>Deskripsi</th>
                      <th>email</th>
                      <th>gambar</th>
                      <th>Waktu Mulai</th>
                      <th>waktu selesai</th>
                    
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($portofolio as $p) : ?>
                      <tr>
                        <td><?= $i;?></td>
                      
                        <td><?= $p->deskripsi_projek ?></td>
                        <td><?= $p->email ?></td>
                        <td><img src="<?= base_url('./project/'). $p->image;?>"width="250px" height="200px" ></td>
                        <td><?=$p->date_created; ?></td>
                        <td><?= $p->date_done; ?></td>
                        <td> <a href="<?php echo site_url('edit/hapus/'.$p->id);?>" class="btn btn-md btn-danger">Delete</a></td>
                      </tr>

            <?php $i++; ?>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      </div>
