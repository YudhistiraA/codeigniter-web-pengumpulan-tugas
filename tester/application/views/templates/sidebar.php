<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          SMK TELKOM
        </a>
        <a href="http://www.creative-tim.com"  class="simple-text logo-normal">
          MALANG
        </a>
      </div>
      <?php if ($user['role_id'] == 1)  { ?>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item active ">
              <a class="nav-link" href="<?= base_url('admin')?>">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('edit/index')?>">
                <i class="material-icons">perm_identity</i>
                <p>Profile</p>
              </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('admin/karyawan')?>">
                <i class="material-icons">content_paste</i>
                <p>Data Karyawan</p>
              </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('auth/logout')?>">
                <i class="material-icons">logout</i>
                <p>Logout</p>
              </a>
            </li>

          </ul>
         <?php } ?>
         <?php if ($user['role_id'] == 2)  { ?>
           <div class="sidebar-wrapper">
             <ul class="nav">
               <li class="nav-item active">
                   <a class="nav-link" href="<?= base_url('user/')?>">
                   <i class="material-icons">perm_identity</i>
                   <p>Project</p>
                 </a>
               </li>
               <li class="nav-item ">
                   <a class="nav-link" href="<?= base_url('edit/index')?>">
                   <i class="material-icons">content_paste</i>
                   <p>Profile</p>
                 </a>
               </li>
               <li class="nav-item ">
                   <a class="nav-link" href="<?= base_url('edit/portofolio/')?>">
                   <i class="material-icons">content_paste</i>
                   <p>Portofolio</p>
                 </a>
               </li>
               <li class="nav-item ">
                   <a class="nav-link" href="<?= base_url('auth/logout')?>">
                   <i class="material-icons">logout</i>
                   <p>Logout</p>
                 </a>
               </li>

             </ul>
            <?php } ?>

      </div>
    </div>
