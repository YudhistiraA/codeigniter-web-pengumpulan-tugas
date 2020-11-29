
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="col-lg-12">
        <div class="col-lg-6">
          <?= $this->session->flashdata('message'); ?>
        </div>
        </div>
        <div class="card col-sm-12">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Project</h4>
            <p class="card-category">Upload Bukti Bahwa Project Sudah Selesai</p>
            
          </div>
       
          <div class="card-body col-lg-12">
          <form method="post" enctype="multipart/form-data" action=''>
          <div class="col-md-12">
                  <div class="form-group box">
                    <label class="bmd-label-floating">nama project</label>
                    <input type="text" id="keterangan" name="nama" class="form-control" value="<?= $project->nama;?>" readonly>
                  </div>
                </div>
         
                <div class="col-md-12">
                  <div class="form-group box">
                    <label class="bmd-label-floating">Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="<?= $project->deskripsi_project;?>" readonly>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group box">
                    <label class="bmd-label-floating">email pengirim</label>
                    <input type="text" id="keterangan" name="email"  class="form-control" value="<?= $this->session->userdata('email');?>" >
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group box">
                    <label class="bmd-label-floating">date created</label>
                    <input type="text" id="keterangan" name="date" class="form-control" value="<?= $project->date_created;?>" readonly>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group box">
                    <label class="bmd-label-floating">deatline</label>
                    <input type="text" id="keterangan" name="deatline" class="form-control" value="<?= $project->deathline;?>" readonly>
                  </div>
                </div>


          </div>
        <div class="form-group-row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-3">
              <label class="bmd-label-floating">file gambar</label>
                </div>
              <div class="col-sm-9">
                <div class="custom-file">
                <input type="file" class="custom-file-input" name="berkas" id="berkas">
                  <label class="custom-file-label rounded" for="image">Choose File</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      <input type="submit" name="submit" value="Simpan" class="btn btn-success"></input>
        </div>
      </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
