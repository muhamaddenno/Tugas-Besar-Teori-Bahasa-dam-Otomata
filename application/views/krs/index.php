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

        <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</body>

</html>