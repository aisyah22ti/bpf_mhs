<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    

<section class=" text-dark text-center text-sm-start " id="home">
    <div class="container py-4">
      <div class="d-sm-flex align-items-center justify-content-between py-5">
        <div>
          <a href="#" >
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/768px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" class="img-fluid" style="width: 245px; ">
          </a>

        </div>
        <div style="margin-left: 5%;">
        <h2 class="my-4 text-dark text-center">FORM PENDAFTARAN SEKOLAH MENENGAH ATAS </h2>
        </div>
      </div>
    </div>
    <hr />
  </section>


  <form>
    <div class="row g-3 align-items-center mb-4">
      <div class="col-auto">
        <label for="username" class="col-form-label">Nama Lengkap</label>
      </div>

      <div class="col-auto">
        <input type="text" class="form-control" placeholder="First name">
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="Last name">
      </div>
  </div>

  <div class="row g-3 align-items-center mb-4">
      <div class="col-auto">
        <label for="username" class="col-form-label">Nama Panggilan</label>
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="Name">
      </div>
  </div>

  <div class="row g-3 align-items-center mb-4">
    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1"> Laki-Laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2"> Perempuan
          </label>
        </div>
      </div>
  </div>

  
  <div class="row g-3 align-items-center mb-4">
    <div class="col-auto">
        <label for="asalTK" class="col-form-label">Berasal dari TK</label>
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="Asal TK">
      </div>

  </div>

  <div class="row g-3 align-items-center mb-4">

  <p>Calon Siswa yang dapat mendaftar minimal <b> 1 Juli 2020 berumur 5 tahun 6 bulan</b></p>
  </div>

  <div class="row g-3 align-items-center mb-4">
    <div class="col-auto">
        <label for="tmptLahir" class="col-form-label">Tempat Lahir</label>
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="Country">
      </div>

  </div>

  
  <div class="row g-3 align-items-center mb-4">
    <div class="col-auto">
        <label for="tglLahir" class="col-form-label">Tanggal Lahir</label>
      </div>
      <div class="col-auto">
        <input type="date" class="form-control" placeholder="Country">
      </div>

  </div>

  <div class="row g-3 align-items-center mb-4">
    <div class="col-auto">
        <label for="noAktaLhr" class="col-form-label">No Akta Lahir</label>
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="No Akta Lahir">
      </div>
  </div>

  
  <div class="row g-3 align-items-center mb-4">
      <div class="col-auto">
        <label for="noNIK" class="col-form-label">NIK</label>
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="No NIK">
      </div>
  </div>

  <div class="row g-3 align-items-center mb-4">
    <div class="col-auto">
        <label for="username" class="col-form-label">Anak Ke</label>
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="Sesuai Akta">
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="Sesuai KK">
      </div>
  </div>

  <div class="row g-3 align-items-center mb-4">
    <div class="col-auto">
        <label for="anakKe" class="col-form-label">Status Anak</label>
      </div>
      <div class="col-auto">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Silahkan Pilih</option>
        <option value="1">Siswa</option>
        <option value="2">Mahasiswa</option>
        <option value="3">Menikah</option>      </select>
      </div>
  </div>

  <div class="row g-3 align-items-center mb-4">
    <div class="col-auto">
        <label for="noNIK" class="col-form-label">Jumlah Saudara Kandung</label>
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="">
      </div>
  </div>

  <div class="row g-3 align-items-center mb-4">
    <div class="col-auto">
        <label for="anakKe" class="col-form-label">Kewarganegaraan</label>
      </div>
      <div class="col-auto">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect2">
        <option selected>Silahkan Pilih</option>
        <option value="1">WNI</option>
        <option value="2">WNA</option>
     </select>
      </div>
  </div>

  <div class="row align-items-center mb-5">
      <legend class="col-form-label col-sm-2 pt-0">Anak Berkebutuhan Khusus</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1"> Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2"> Tidak
          </label>
        </div>
      </div>
  </div>


 

  <div class="row g-3 align-items-center mb-4">
    <div class=" col-auto">
        <label for="asalTK" class="col-form-label">Alamat sesuai KK</label>
      </div>
        <input type="text" class="form-control" placeholder="Alamat (beserta RT/RW)">
        <input type="text" class="form-control" placeholder="Kecamatan">
        <input type="text" class="form-control" placeholder="Kelurahan">
        <input type="text" class="form-control" placeholder="Kota/Desa">
        <input type="text" class="form-control" placeholder="Kode Pos">
</div>

<div class="row g-3 align-items-center mb-4">
  <div class=" col-auto">
    <label for="asalTK" class="col-form-label">Alamat Domisili</label>
  </div>
    <input type="text" class="form-control" placeholder="Alamat (beserta RT/RW)">
    <input type="text" class="form-control" placeholder="Kecamatan">
    <input type="text" class="form-control" placeholder="Kelurahan">
    <input type="text" class="form-control" placeholder="Kota/Desa">
    <input type="text" class="form-control" placeholder="Kode Pos">
</div>

<div class="row g-3 align-items-center mb-4">
  <div class="col-auto">
    <label for="anakKe" class="col-form-label">Tinggal Bersama</label>
  </div>
  <div class="col-auto">
  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
    <option selected>Silahkan Pilih</option>
    <option value="1">Ortu</option>
    <option value="2">Wali</option>
    <option value="3">Sendiri</option>      </select>
  </div>
</div>

<div class="row g-3 align-items-center mb-4">
  <div class="col-auto">
    <label for="anakKe" class="col-form-label">Jenis Tinggal</label>
  </div>
  <div class="col-auto">
  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
    <option selected>Silahkan Pilih</option>
    <option value="1">Rumah</option>
    <option value="2">Kost</option>
  </select>
  </div>
</div>

<div class="row g-3 align-items-center mb-4">
  <div class="col-auto">
    <label for="asalTK" class="col-form-label"> Jarak ke Sekolah</label>
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" placeholder="Meter / Kilometer">
  </div>
</div>

<div class="row g-3 align-items-center mb-4">
  <div class="col-auto">
    <label for="anakKe" class="col-form-label">Alat Transportasi</label>
  </div>
  <div class="col-auto">
  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
    <option selected>Silahkan Pilih</option>
    <option value="1">Motor</option>
    <option value="2">Mobil</option>
  </select>
  </div>
</div>


<div class="row g-3 align-items-center mb-4">
  <legend class="col-form-label col-sm-2 pt-0">Penerima Bantuan</legend>
  <div class="col-sm-10">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
      <label class="form-check-label" for="gridRadios1"> Ya
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> Tidak
      </label>
    </div>
  </div>
</div>

<div class="row g-3 align-items-center mb-4">
  <legend class="col-form-label col-sm-2 pt-0">Jenis Bantuan</legend>
  <div class="col-sm-10">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
      <label class="form-check-label" for="gridRadios1"> BSM
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> Bidik Misi
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> PIP
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> KKS
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> PKH
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
  
      <div class="col-sm-1">
        <input type="text" class="form-control" placeholder="Other">
      </div>

    </div>
  </div>
</div>

<div class="row g-3 align-items-center mb-4">
  <div class="col-auto">
    <label for="" class="col-form-label">No Tanda Bantuan</label>
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" placeholder="">
  </div>
</div>

<div class="row g-3 align-items-center mb-4">
  <div class="col-auto">
    <label for="" class="col-form-label">No Telpon</label>
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" placeholder="No Telpon">
  </div>
</div>

<div class="row g-3 align-items-center mb-4">
  <legend class="col-form-label col-sm-2 pt-0">Pekerjaan Ayah</legend>
  <div class="col-sm-10">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
      <label class="form-check-label" for="gridRadios1"> Buruh
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> Bidik Misi
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> PIP
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> KKS
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
      <label class="form-check-label" for="gridRadios2"> PKH
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
  
      <div class="col-sm-1">
        <input type="text" class="form-control" placeholder="Other">
      </div>

    </div>
  </div>
</div>





  </form>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>