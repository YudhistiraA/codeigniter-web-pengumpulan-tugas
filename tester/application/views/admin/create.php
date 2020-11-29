<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-9 col-sm-6">
  <form class="project" method="post" action="<?= base_url('admin/add') ?>">
      <div class="form-group">
        <label for="nama">Nama Project</label>
        <input type="text" class="form-control" id="nama" name="nama" >
      </div>
      <div class="form-group">
        <label for="deskripsi_project">Deskripsi Project</label>
        <input type="text" class="form-control" id="deskripsi_project" name="deskripsi_project">
      </div>

      <div class="form-group">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control">
        <option >implemented</option>
        <option>Reviewed</option>
        </select>
      </div>
      <div class="row">
        <div class="form-group col-lg-6">
          <label for="Waktu Mulai">Waktu Mulai</label>
          <input type="date" class="form-control" id="date" name="date_created">
        </div>
        <div class="form-group col-lg-6">
          <label for="deathline">Deathline</label>
          <input type="date" class="form-control" id="deathline" name="deathline">
        </div>
      </div>

      <input type="submit" name="submit" value="Simpan" class="btn btn-success btn-user "></input>
      <button type="reset" class="btn btn-md btn-danger">Cancel</button>
      <button class="btn btn-md btn-warning"> <a href="<?= base_url('admin') ?>">Kembali</a></button>
    </div>

    </form>
  </div>
  </div>
  </div>
  </div>
