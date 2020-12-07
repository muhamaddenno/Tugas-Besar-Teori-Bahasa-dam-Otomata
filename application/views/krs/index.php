<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRS Online</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    
    <br><br>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
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
                    <td><a href="<?=site_url('masuk/proses/').$u->id?>" class="btn btn-warning">Ambil</a>
                    </td>
                </tr>
                <?php }  ?>
            </tbody>
        </table>

    </div>

</body>

</html>