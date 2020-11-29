<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-9 col-sm-6">

<a href="#"></a>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-danger">
        <div class="card-icon">
          <i class="material-icons">groups</i>
        </div>
        <h5 class="card-titile"> Data Karyawan</h5>
      </div>
      <div class="card-body">
        <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Email</th>
            <th>Umur</th>
            <th>Kota</th>
            <th>Nomor</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($profile as $p) : ?>
            <tr>
              <td><?= $i;  ?></td>
              <td><?= $p['name']; ?></td>
              <td><?= $p['email']; ?></td>
              <td><?= $p['umur']; ?></td>
              <td><?= $p['kota']; ?></td>
              <td><?= $p['nohp']; ?></td>
              <td>
                <a href="<?= base_url();?>admin/hapuskaryawan/<?= $p['id']; ?>" class="btn btn-md btn-danger">Delete</a>
                <a href="<?= base_url();?>admin/portofolio/<?= $p['id']; ?>" class="btn btn-md btn-warning">portofolio</a>
              </td>
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
