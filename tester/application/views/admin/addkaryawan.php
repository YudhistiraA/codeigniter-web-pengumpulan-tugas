<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-9 col-sm-6">

  <form class="project" method="post" action="<?= base_url('admin/addkaryawan') ?>">
      <div class="form-group">
        <label for="nama">Nama karyawan</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="nohp">Nomor Hp</label>
        <input type="text" class="form-control" id="nohp" name="nohp">
      </div>
      <div class="form-group">
        <label for="kota">Kota</label>
        <input type="text" class="form-control" id="kota" name="kota">
      </div>
      <div class="form-group">
      <label for="image" class="btn btn-warning btn-round">Upload Image</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>
      <button type="submit" class="btn btn-md btn-primary">Submit</button>
      <button type="reset" class="btn btn-md btn-danger">Cancel</button>
      <button class="btn btn-md btn-warning"> <a href="">Kembali</a></button>
    </div>

    </form>
  </div>
  </div>
  </div>
  </div>
