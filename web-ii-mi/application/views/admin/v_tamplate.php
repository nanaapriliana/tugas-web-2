<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul;?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">D3 MI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/Pengumuman'); ?>">Pengumuman</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/home/coba">Coba</a>
      </li>

        <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/Mahasiswa'); ?>">Mahasiswa</a>
        </li> -->
        <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/Dosen'); ?>">Dosen</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data Master
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('admin/Mahasiswa'); ?>">Mahasiswa</a>
          <a class="dropdown-item" href="<?php echo site_url ('admin/Dosen'); ?>">Dosen</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Perwalian</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<div class="container-fluid" style="margin-top: 10px;">
		<div class="row">
    
      <?php $this->load->view($halaman); ?>
      
    </div>
	</div>

	<script src="<?php echo base_url('assets/jquery.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>

</body>
</html>