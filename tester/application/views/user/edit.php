
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="col-lg-6">
          <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>

 <?php
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
          </div>
          <div class="card-body">
          <?= form_open_multipart('edit/index');?>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Username </label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= $user['name']; ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Since</label>
                    <input type="text" class="form-control" value="<?= date('d F Y', $user['date_created']); ?> " disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $user['alamat']; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kota</label>
                    <input type="text" id="kota" name="kota" class="form-control" value="<?= $user['kota']; ?>" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nomor Handphone</label>
                    <input type="text" id="nohp" name="nohp" class="form-control" value="<?= $user['nohp']; ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Umur</label>
                    <input type="text" id="umur" name="umur" class="form-control" value="<?= $user['umur']; ?>">
                  </div>
                </div>
                

          </div>
        <div class="form-group-row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-3">
                <img src="<?= base_url('./profile/') . $user['image'];?>"
                class="img-thumbnail">
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
        </div>

        </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                  <img src="<?= base_url('./profile/') . $user['image'];?>">
              </div>
              <div class="card-body">
                <h6 class="card-category text-gray"></h6>
                <h4 class="card-title" ><?= $user['name'];?></h4>
                <div class="col-md-12">
                  <div class="form-group">
                    <p class="card-description">
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="<?= $user['deskripsi']; ?>">

                </div>

              </div>
            </div>
            <button value="simpan" type="submit" class="btn btn-primary pull-right">Update Profile</button>
          </form>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
