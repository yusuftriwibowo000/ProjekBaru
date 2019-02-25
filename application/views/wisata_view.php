<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Wisata Jember</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
    <div class="row mt-3 ml-5">
      <div class="col-md-6">
        <a href="http://localhost/ProjekBaru/wisata/add_new" class="btn btn-primary">Tambah Kategori Wisata</a>
      </div>
    </div>

    <div class="container">
        <h1><center>Wisata Jember</center></h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Konten</th>
            <th scope="col">Foto</th>
            <th width="200">Action</th>
            <!-- <th scope="col">Gambar</th> -->
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($tb_kategori_wisata->result() as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->kat_judul;?></td>
            <td><?php echo $row->kat_konten;?></td>
            <td>
                <img src="<?php echo base_url('assets/images/'.$row->kat_gambar) ?>" width="64" />
            </td>
            <td>
              <a href="<?php echo site_url('wisata/get_edit/'.$row->kat_id);?>" class="btn btn-sm btn-info">Update</a>
              <a href="<?php echo site_url('wisata/delete/'.$row->kat_id);?>" class="btn btn-sm btn-danger">Delete</a>
            <td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>