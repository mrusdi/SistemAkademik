<div class="container-fluid">

<div class="alert alert-success" role="alert">
         <i class="fas fa-university"></i> DAFTAR USERS
    </div>
    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/user/tambah_user','<button class="btn btn-sm btn-primary mb-3"><i class= "fas fa-plus fa-sm"></i> Tambah User</button>')  ?>




</div>