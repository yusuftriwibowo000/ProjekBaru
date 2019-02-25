<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tambah Kategori</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
      <h1><center>Tambah Kategori Wisata</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('wisata/save');?>" method="post">
          <div class="form-group">
            <label>Judul wisata</label>
            <input type="text" class="form-control" name="kat_judul" placeholder="Judul wisata">
          </div>
          <div class="form-group">
            <label>Konten</label>
            <input type="text" class="form-control" name="kat_konten" placeholder="Konten">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>