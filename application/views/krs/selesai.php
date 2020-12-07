<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Daftar Matakuliah</title>
  </head>
  <body >
    
     
      <div class="row">
            <div class="col-md-8 offset-md-2 col-12 profile-main mt-4">
                <div class="row">
                    <div class="col-md-12 col-12 user-detail-main border mb-3 pb-2">
                        <div class="row">
                            <div class="col-md-12 col-12 profile-back">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12 user-detail text-center">
                                <h4 class="m-0"><strong><?php echo $mhs->nama;  ?></strong></h4>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div align="center" class="mt-3">
                      <img class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/<?php echo $mhs->foto;  ?>" width="200" height="120">
                      <h6>Prodi : <?php echo $mhs->prodi;  ?></h6>
                      <h6>NIM : <?php echo $mhs->nim;  ?></h6>
                    </div>
                  <div class="row">
                    <div class="col-md-12 col-12 user-detail-main border mb-3 pb-2">
                        <div class="container">
                          <table class="table">
                              <thead>
                                  <tr class="bg-primary">
                                      <th scope="col">#</th>
                                      <th scope="col">KODE</th>
                                      <th scope="col">NAMA MATAKULIAH</th>
                                      <th scope="col">SKS</th>
                                      <th scope="col">DOSEN</th>
                                      <th scope="col">AKSI</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php 
                                $no = 0;
                                foreach($matkul as $u){  
                                    $no = $no + 1;
                                ?>
                                  <tr>
                                      <th scope="row"><?php echo $no;  ?></th>
                                      <td><?php echo $u->kode_matkul;  ?></td>
                                      <td><?php echo $u->nama;  ?></td>
                                      <td><?php echo $u->sks;  ?></td>
                                      <td><?php echo $u->dosen;  ?></td>
                                      <td><a href="<?php echo base_url('masuk/hapus/') . $u->id ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Delete?');">Hapus</a>
                                      </td>
                                  </tr>
                                <?php }  ?>
                              </tbody>
                          <?= $this->session->flashdata('message'); ?>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

  </body>
</html>