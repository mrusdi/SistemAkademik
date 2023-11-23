<div class="container-fluid">

        <div class="alert alert-success" role="alert">
            <i class="fas fa-university"></i> Kartu Hasil Studi (KHS)
        </div>

        <center class="mb-4">
            <legend class="mt-3"><strong>KARTU HASIL STUDI</strong></legend>
        
            <table>
                <tr>
                    <td><strong>NIM</strong></td>
                    <td>&nbsp; : <?php echo $mhs_nim ?> </td>
                </tr>

                <tr>
                    <td><strong>Nama Lengkap</strong></td>
                    <td>&nbsp; : <?php echo $mhs_nama_lengkap ?> </td>
                </tr>

                <tr>
                    <td><strong>Program Studi</strong></td>
                    <td>&nbsp; : <?php echo $mhs_prodi ?> </td>
                </tr>

                <tr>
                    <td><strong>Tahun Akademik (Semester)</strong></td>
                    <td>&nbsp; : <?php echo $thn_akad ?> </td>
                </tr>

            </table>
        </center>

        <?php echo anchor('administrator/krs/print','<button class="btn btn-sm btn-info mb-3"><i class= "fas fa-plus fa-sm"></i> Print/Cetak</button>')  ?>

                <table class="table table-bordered table-striped table-hover ">
                    <tr>
                        <th>NO</th>
                        <th>KODE MATA KULIAH</th>
                        <th>NAMA MATA KULIAH</th>
                        <th>SKS</th>
                        <th>NILAI</th>
                        <th>SKOR</th>

                    </tr>
                    
                    <?php 
                    $no = 1;
                    $jumlahSks=0;
                    $jumlahNilai=0;
                    foreach ($mhs_data as $row) : ?>

                    <tr>
                        <td width="20px"> <?php echo $no++ ?> </td>
                        <td> <?php echo $row->kode_matakuliah; ?> </td>
                        <td> <?php echo $row->nama_matakuliah; ?> </td>
                        <td> <?php echo $row->sks; ?> </td>
                        <td> <?php echo $row->nilai; ?> </td>
                        <td> <?php echo skorNilai($row->nilai,$row->sks) ?></td>
                        <?php 
                        $jumlahSks+=$row->sks;
                        $jumlahNilai+=skorNilai($row->nilai,$row->sks);
                        ?>                       
                    </tr>
                    
                    <?php endforeach; ?>

                    <tr>
                        <td colspan="3">Jumlah</td>
                        <td> <?php echo $jumlahSks ?> </td>
                        <td> <?php echo $jumlahNilai ?> </td>
                    </tr>

                    <tr>
                        <td colspan="3" align="right"><strong>Jumlah SKS</strong></td>
                        <td><strong> <?php $jumlahSks; ?> </strong></td>
                    </tr>

                    Index Prestasi : <?php echo number_format($jumlahNilai/$jumlahSks,2); ?>

                </table>
        


</div>