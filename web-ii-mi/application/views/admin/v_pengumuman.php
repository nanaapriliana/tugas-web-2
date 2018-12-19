<div class="col-md-12">
        <div class="card">
          <div class="card-header" style="background-color: skyblue"><?php echo "$sub_judul"; ?></div>
          <div class="card-body" style="background-color: pink">

            <?php

            if ($this->session->flashdata('info')){
                echo "<div class='alert alert-primary'>" . $this->session->flashdata('info'). "</div";
            } 

             ?>

            <a href="<?php echo site_url('admin/pengumuman/tambah'); ?>" class="btn btn-primary">Tambah Data</a>

            <br> <br>
            Pengumuman
            <?php  
            foreach ($isi_tabel as $value) :
            	
             ?>

            <div style="border: 1px solid red; padding:  15px margin-bottom: 10px">

            <div class="row">
            	<div class="col-sm-1">
            		<img width="100px" height="100px" src="<?= base_url('assets/aa.jpg') ?>" class="img.thumbnail">

            	</div>
            	<div class="col-sm-4">
            		Penulis : <strong><?php echo $value->penulis ?></strong>
            		<br>
            		<?php echo $value->created_at ?>
            	</div>

                <div class="col-xl-7">
                    <a href="<?= site_url('admin/pengumuman/hapus/' . $value->Id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('anda yakin?')">Hapus</a>
                    <a href="<?= site_url('admin/pengumuman/edit/' . $value->Id); ?>" class="btn btn-warning btn-sm">Edit</a>
                    

                </div>
            </div>
            <div class="row">
            	<div class="col-sm-12">
            		<h4><?php echo $value->judul ?></h4>
            		<p><?php echo $value->isi ?></p>
            	</div>
            </div>

            </div>

<?php endforeach; ?>
            
          </div>
          
        </div>
        
       </div> 