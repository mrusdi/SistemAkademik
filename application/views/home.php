<nav class="navbar navbar-light text-light justify-content-between">

    <?php foreach ($identitas as $id) :?>
  <a class="navbar-brand"> <?php echo $id->judul_website ?></a>
  <span class="small"> <?php echo $id->alamat ?> - <?php echo $id->email ?> - <?php echo $id->telp ?></span>
  <?php endforeach; ?>
  <form class="form-inline" >
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    <a class="btn btn-outline-light my-2 my-sm-0 ml-2" type="submit" href="<?php echo base_url('administrator/auth/proses_login') ?>">Logout</a>

  </form>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-gradient-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-item nav-link ml-3" href="#">BERANDA <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link ml-3" href="#">TENTANG KAMPUS</a>
      <a class="nav-item nav-link ml-3" href="#">INFORMASI</a>
      <a class="nav-item nav-link ml-3" href="#">FASILITAS</a>
      <a class="nav-item nav-link ml-3" href="#">GALLERY</a>
      <a class="nav-item nav-link ml-3" href="#">KONTAK</a>
    </div>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel mt-" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=" <?php echo base_url('assets/img/4.png')?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/5.png')?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/6.png')?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


 <div class="card text-center m-5">
  <div class="card-header">
  <strong>TENTANG KAMPUS</strong>
  </div>
  <div class="card-body">
    <p class="card-text">
      
      <?php foreach($tentang as $ttg) : ?>
      <?php echo word_limiter ($ttg->sejarah,30) ?>
      <?php endforeach; ?>

    </p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Selengkapnya
</button>  
</div>  
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tantang Kampus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify" >
        <strong>SEJARAH UPN VETERAN YOGYAKARTA</strong>
          <?php foreach($tentang as $ttg) : ?>
          <?php echo $ttg->sejarah ?>
          <?php endforeach; ?> <br><br>

          <strong>VISI UPN VETERAN YOGYAKARTA</strong>
          <?php foreach($tentang as $ttg) : ?>
          <?php echo $ttg->visi ?>
          <?php endforeach; ?> <br><br>

          <strong>MISI UPN VETERAN YOGYAKARTA</strong>
          <?php foreach($tentang as $ttg) : ?>
          <?php echo $ttg->misi ?>
          <?php endforeach; ?> <br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="row  m-4 text-center">
<?php foreach ($informasi as $info) : ?>
    <div class="card card-info m-3" style="width: 18rem;">
    <span class="display-2 text-center text-info"> <i class=" <?php echo $info->icon ?>"></i> </span>
        <div class="card-body">
          <h5 class="card-title badge badge-info"> <?php echo $info->judul_informasi ?> </h5>
          <p class="card-text"> <?php echo $info->isi_informasi ?></p>
          <a href="#" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>
    <?php  endforeach;?>
</div>

<form method="post" action="<?php echo base_url('home/kirim_pesan') ?>">

<div class="row m-4">
  <div class="col-md-8">
      <div class="alert alert-primary">
      <i class="fas fas-envelope-open-text"></i>HUBUNGI KAMI
      </div>

      <?php echo $this->session->flashdata('pesan') ?>

        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control">
          <?php echo form_error('nama','<div class="text-danger small">','</div') ?>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
          <?php echo form_error('email','<div class="text-danger small">','</div') ?>
        </div>

        <div class="form-group">
          <label>Pesan</label>
          <textarea type="text" name="pesan" class="form-control" rows="5"></textarea>
          <?php echo form_error('pesan','<div class="text-danger small">','</div') ?>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>

  </div>


</div>


</form>


<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
<!--headin5_amrc-->
<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
<p><i class="fa fa-location-arrow"></i> Yogyakarta </p>
<p><i class="fa fa-phone"></i>  082294063702  </p>
<p><i class="fa fa fa-envelope"></i> rusdilubism@gmail.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="#">Image Rectoucing</a></li>
<li><a href="#">Clipping Path</a></li>
<li><a href="#">Hollow Man Montage</a></li>
<li><a href="#">Ebay & Amazon</a></li>
<li><a href="#">Hair Masking/Clipping</a></li>
<li><a href="#">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="#">Remove Background</a></li>
<li><a href="#">Shadows & Mirror Reflection</a></li>
<li><a href="#">Logo Design</a></li>
<li><a href="#">Vectorization</a></li>
<li><a href="#">Hair Masking/Clipping</a></li>
<li><a href="#">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2023 | Designed With by <a href="#">Rusdi</a></p>

<ul class="social_footer_ul">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>