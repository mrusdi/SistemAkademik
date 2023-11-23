<div class="container-fluid">
<div class="alert alert-success" role="alert">
<i class="fas fa-tachometer-alt"></i> Dashboard
</div>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Selamat Datang</h4>
  <p> Selamat Datang <strong> <?php echo $username; ?></strong> di Sistem Informasi Akademik UPN Veteran Yogyakarta, Anda Login Sebagai <strong> <?php echo $level; ?></strong> </p>
  <hr>
  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-cog" aria-hidden="true"></i> Control Panel
</button>
  <!-- <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-cog" aria-hidden="true"></i> Control Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row d-flex justify-content-center">

        <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/identitas') ?>"><p class="nav-link small text-info">MAHASISWA</p></a>
            <i class="fas fa-3x fa-user-graduate"></i>
        </div>

        <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/tahun_akademik') ?>"><p class="nav-link small text-info">TAHUN AKADEMIK</p></a>
            <i class="fas fa-3x fa-calendar-alt"></i>
        </div>
        <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/krs') ?>"><p class="nav-link small text-info">KRS</p></a>
            <i class="fas fa-3x fa-edit"></i>
        </div>
         </div><hr>     
     
    
        <div class="row d-flex justify-content-center">

        <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/identitas') ?>"><p class="nav-link small text-info">IDENTITAS</p></a>
            <i class="fas fa-3x fa-id-card-alt"></i>
        </div>

        <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/tentang_kampus') ?>"><p class="nav-link small text-info">TENTANG KAMPUS</p></a>
            <i class="fas fa-3x fa-info-circle"></i>
        </div>
        
        <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/nilai') ?>"><p class="nav-link small text-info">KHS</p></a>
            <i class="fas fa-3x fa-file-alt"></i>
        </div>
       
       
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>



</div>