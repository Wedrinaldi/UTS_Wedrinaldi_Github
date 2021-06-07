<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv=" Content_Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="gaya.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Wedrinaldi</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light " style="background-color:blue;">
    <a><img class="img-thumbnail" src="../image/pcr.png" width="250px"></a>
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <b><a style="color:white" class="nav-link" href="https://pmb.pcr.ac.id/">HOME <span class="sr-only">(current)</span></a></b>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <b style="color:white">INFORMASI PENDAFTARAN</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://pmb.pcr.ac.id/mengapa-memilih-pcr">MENGAPA MEMILIH PCR</a>
              <a class="dropdown-item" href="https://pmb.pcr.ac.id/akomodasi-transportasi">AKOMODASI & TRANSPORTASI</a>
              <a class="dropdown-item" href="https://pmb.pcr.ac.id/peluang-kerja-prodi">PELUANG KERJA PRODI</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <b style="color:white">KETENTUAN PENDAFTARAN</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://pmb.pcr.ac.id/jalur-pendaftaran">JALUR PENDAFTARAN</a>
              <a class="dropdown-item" href="https://pmb.pcr.ac.id/syarat-pendaftaran">SYARAT PENDAFTARAN</a>
              <a class="dropdown-item" href="https://pmb.pcr.ac.id/panduan-pendaftaran">PANDUAN PENDAFTARAN</a>
            </div>
          </li>
          <li class="nav-item active">
            <b><a style="color:white" class="nav-link" href="https://pmb.pcr.ac.id/jadwal-pendaftaran">JADWAL PENDAFTARAN <span
                class="sr-only">(current)</span></a></li></b>
          <li class="nav-item active">
            <b><a style="color:white" class="nav-link" href="https://pmb.pcr.ac.id/biaya-pendidikan">BIAYA PENDIDIKAN <span
                class="sr-only">(current)</span></a></li></b>
          </b><li class="nav-item active">
          <b><a style="color:white" class="nav-link" href="https://pmb.pcr.ac.id/kontak">KONTAK <span class="sr-only">(current)</span></a>
          </li></b>
          <li class="nav-item active">
          <b><a style="color:white" class="nav-link" href="https://pmb.pcr.ac.id/login">LOGIN <span class="sr-only">(current)</span></a></li></b>
          </form>
      </div>
    </div>
  </nav>

  <br>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col order-last">
        <table>

          <h1>Silakan Mengisi Data Disini Untuk Pendaftaran</h1>

          <form action="../controller/proses.php?aksi=tambah" method="post">
          <fieldset>
            <table>
              <p>
                <select name="program" id="program" style="background-color:Yellow">
                  <option value="Silakan Memilih Program">--Pilih Program Pendidikan--</option>
                  <option value="Program Reguler D-III & D-IV">Program Reguler D-III & D-IV</option>
                  <option value="Program Magister">Program Magister</option>
                  <option value="Program Non Reguler SLTA Ke D-III">Program Non Reguler SLTA Ke D-III</option>
                  <option value="Program Alih Jenjang D-III Ke D-IV">Program Alih Jenjang D-III Ke D-IV</option>
                </select>

              </tr>
              <tr>
                <div class="placeholder">
                  <td>
                  <label for=" nama"></label>
                  <input type="text" name="nama"placeholder="Nama Lengkap" />
                </div>
                </td>
              </tr>
              <tr>
                <td>
                <label for="Email"></label>
                <input type="text" name="email"placeholder="Email" />
                </td>
              </tr>
              <tr>
                <td>
                <label for="Nilai Rata-Rata"></label>
                <input type="text" name="nilai"placeholder="Nilai Rata-Rata" />
                </td>
              </tr>
              <tr>
                <td>
                <label for="Asal Daerah"></label>
                <input type="text" name="asal"placeholder="Asal Daerah" />
                </td>
              </tr>
              <tr>
                <td>
                  <br>
                  <input type="submit" value="Daftar" style="background-color:Yellow; height: 50px; width:150px;"  >
                  
                </td>
              </tr>
            </table>
            </fieldset>
          </form>
          
      </div>
      <div class="col">
        <table>
          <h1 style="color:white">Ayo Daftar</h1>
          <h3 style="color:white">Calon Mahasiswa Baru</h3>
          
        </table>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br>
  <div>
    <img class="img-thumbnail" src="../image/gambar1.png" >
  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
