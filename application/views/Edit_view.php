<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Kategori Wisata</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
      <h1><center>Edit Kategori Wisata</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('wisata/update');?>" method="post">
          <div class="form-group">
            <label>Judul Wisata</label>
            <input type="text" class="form-control" name="kat_judul" value="<?php echo $kat_judul;?>" placeholder="Judul">
          </div>
          <div class="form-group">
            <label>Konten</label>
            <input type="text" class="form-control" name="kat_konten" value="<?php echo $kat_konten;?>" placeholder="Konten">
          </div>
          <!-- <div>
          <img src="<?php echo base_url('assets/images/'.$row->kat_gambar) ?>" width="64" />
          <input type="file" name="filefoto">
          </div> -->
          <input type="hidden" name="kat_id" value="<?php echo $kat_id?>">
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>