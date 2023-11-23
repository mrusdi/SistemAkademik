<div class="container-fluid">
    <div class="alert alert-success" role="alert">
         <i class="fas fa-eye"></i> Detail Mahasiswa
    </div>

        <table class="table table-hover table-striped  table-bordered">
        
        <?php foreach ($detail as $dt) :?>
        <img class="mb-4" src="<?php echo base_url('assets/uploads/').$dt->photo  ?> " style="width : 20%">

        <tr>
            <th>NIM</th>
            <td> <?php echo $dt->nim ?> </td>
        </tr>
        <tr>
            <th>NAMA LENGKAP</th>
            <td> <?php echo $dt->nama_lengkap ?> </td>
        </tr>

        <tr>
            <th>ALAMAT</th>
            <td> <?php echo $dt->alamat ?> </td>
        </tr>

        <tr>
            <th>EMAIL</th>
            <td> <?php echo $dt->email ?> </td>
        </tr>

        <tr>
            <th>TELEPON</th>
            <td> <?php echo $dt->telepon ?> </td>
        </tr>

        <tr>
            <th>TEMPAT LAHIR</th>
            <td> <?php echo $dt->tempat_lahir ?> </td>
        </tr>

        <tr>
            <th>TANGGAL LAHIR</th>
            <td> <?php echo $dt->tanggal_lahir ?> </td>
        </tr>

        <tr>
            <th>JENIS KELAMIN</th>
            <td> <?php echo $dt->jenis_kelamin ?> </td>
        </tr>

        <tr>
            <th>NAMA PRODI</th>
            <td> <?php echo $dt->nama_prodi ?> </td>
        </tr>

        <tr>
            <th>PHOTO</th>
            <td> <?php echo $dt->photo ?> </td>
        </tr>

        <?php endforeach; ?>
        
        </table>

        <?php echo anchor('administrator/mahasiswa','<div class="btn btn-sm btn-primary">Kembali</div>') ?> <br><br><br><br>


 </div>