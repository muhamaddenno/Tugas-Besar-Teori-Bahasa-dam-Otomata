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
<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
  <a class="navbar-brand" href="#">SIAKAD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
				<li>
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small"> </span>
						<i class="fas fa-fw fa-2x fa-user-circle"></i>
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
						aria-labelledby="userDropdown">
						<a class="dropdown-item" href="#">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Login
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url()?>mahasiswa/registration">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Register
						</a>
					</div>
				</li>
			</ul>
  </div>
</nav>

    <br><br>
    <div class="container">
        <form class="form-inline" action="post">
            <label>Pilih Tahun Akademik: </label>
            <select name="tahun_akademik">
                <option disabled>--Pilih Tahun Akademik--</option>
                <option value="1">2020/2021</option>
                <option value="2">2019/2020</option>
                <option value="3">2018/2019</option>
                <option value="4">2017/2018</option>
                <option value="5">2016/2017</option>
                <option value="6">2015/2016</option>
                <option value="7">2014/2015</option>
                <option value="8">2013/2014</option>
                <option value="9">2012/2013</option>
                <option value="10">2011/2012</option>
                <option value="11">2010/2011</option>
            </select>
            <select name="semester">
            <option disabled>--Pilih Semester--</option>
                <option value="1">Gasal</option>
                <option value="2">Genap</option>
                <option value="3">Pendek</option>
            </select>

        </form>
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
                <tr>
                    <th scope="row">1</th>
                    <td>NINF6014</td>
                    <td>Pemrograman Web</td>
                    <td>3</td>
                    <td>ACHMAD HAMDAN</td>
                    <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>NINF6015</td>
                    <td>Sistem Operasi</td>
                    <td>3</td>
                    <td>ACHMAD HAMDAN</td>
                    <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>NINF6016</td>
                    <td>Teori Bahasa dan Otomata</td>
                    <td>3</td>
                    <td>KARTIKA CANDRA KIRANA</td>
                    <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>NINF6017</td>
                    <td>Pemrograman Berorientasi Web</td>
                    <td>3</td>
                    <td>AZHAR AHMAD SMARAGDINA</td>
                    <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>NINF6018</td>
                    <td>Basis Data II</td>
                    <td>3</td>
                    <td>WAHYU NUR HIDAYAT</td>
                    <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>NINF6019</td>
                    <td>Kalkulus Lanjut</td>
                    <td>3</td>
                    <td>KARTIKA CANDRA KIRANA</td>
                    <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>UNIV6008</td>
                    <td>Pendidikan Kewarganegaraan</td>
                    <td>2</td>
                    <td>YUNIASTUTI</td>
                    <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>UNIV6009</td>
                    <td>Pendidikan Bahasa Indonesia</td>
                    <td>2</td>
                    <td>DIDIN WIDYARTONO</td>
                    <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah
        </button>
    </div>
</body>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Matakuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open('mahasiswa/tambahmk')?> 
          <div class="form-group">
            <label for="matkul">Mata Kuliah</label>
            <select class="form-control" id="matkul" name="matkul">
              <option value="Algoritma Pemrograman">Algoritma Pemrograman</option>
              <option value="Struktur Data">Struktur Data</option>
              <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
              <option value="Basis Data">Basis Data</option>
              <option value="Basis Data II">Basis Data II</option>
              <option value="Kalkulus">Kalkulus</option>
              <option value="Kalkulus II">Kalkulus II</option>
              <option value="Kalkulus Lanjut">Kalkulus Lanjut</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
</html>