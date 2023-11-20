<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body style="  background-color: gainsboro; width: 100%; height: 100%;
">

  <div class="container " style="background-position: 50%; background-color: gainsboro;">

    <section class=" text-dark text-center text-sm-start " id="home">
      <div class="container py-4">
        <div class="d-sm-flex align-items-center justify-content-between py-5">
          <div style="margin-left: 15%;">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Logo_Kemendikbud.svg/1008px-Logo_Kemendikbud.svg.png"
                class="img-fluid" style="width: 65%; ">
            </a>
          </div>
          <h2 class="my-4 text-dark text-center" style="margin-right: 20%;">FORM PENDAFTARAN SEKOLAH MENENGAH ATAS </h2>
        </div>
      </div>
      <hr />
    </section>

    <form method="POST" action="submit.php" enctype="multipart/form-data">
      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="Nama Depan">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Nama Belakang">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Panggilan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="CallName" name="CallName" placeholder="">
        </div>
      </div>

      <fieldset class="form-group mb-4">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki" checked>
              <label class="form-check-label" for="gridRadios1">
                Laki-Laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
              <label class="form-check-label" for="jk">
                Perempuan
              </label>
            </div>
          </div>
        </div>
      </fieldset>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Berasal dari TK</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="asalTK" name="asalTK" placeholder="Optional">
        </div>
      </div>
      <div class="form-group align-items-center mb-4">
        <p>Calon Siswa yang dapat mendaftar minimal <b> per 1 Juli 2020 berumur 5 tahun 6 bulan</b></p>
      </div>
      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="tptLahir" name="tptLahir" placeholder="">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-5">
          <input type="date" class="form-control" id="tglLahir" name="tglLahir" placeholder="">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">No Akta Lahir</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="noAkta" name="noAkta" placeholder="">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="noNIK" name="noNIK" placeholder="">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Anak Ke-</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="urutanAkta" name="urutanAkta" placeholder="Sesuai Akta">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="urutanKK" name="urutanKK" placeholder="Sesuai KK">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Status Anak</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Jumlah Saudara Kandung</label>
        <div class="col-sm-5">
          <input type="number" class="form-control" id="jmlhSdra" placeholder="">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Kewarganegaraan</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>

      <fieldset class="form-group mb-4">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Anak Berkebutuhan Khusus</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Ya
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
              <label class="form-check-label" for="gridRadios4">
                Tidak
              </label>
            </div>
          </div>
        </div>
      </fieldset>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Keadaan Jasmani</label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="pnykit" placeholder="Penyakit yang pernah diderita">
        </div>
        <div class="col-sm-4 mb-4" style="margin-left: 16%;">
          <input type="text" class="form-control" id="bb" placeholder="Berat Badan" style="margin-left: 2%;">
        </div>
        <div class="col-sm-4 mb-4">
          <input type="text" class="form-control" id="tb" placeholder="Tinggi Badan" style="margin-left: 2%" ;>
        </div>
        <div class="col-sm-4 mb-4">
          <input type="text" class="form-control" id="golDarah" placeholder="Golongan Darah" style="margin-left: 53%;">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Alamat Sesuai KK </label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="alamat1" placeholder="Alamat (beserta RT/RW)">
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="kecamatan1" placeholder="Kecamatan" style="margin-left: 20%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="kelurahan1" placeholder="Kelurahan" style="margin-left: 41%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="kota1" placeholder="Kota / Desa" style="margin-left: 30%" ;>
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="kodePos1" placeholder="Kode Pos" style="margin-left: 20%;">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Alamat Domisili / Yang Ditinggali </label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="alamat2" placeholder="Alamat (beserta RT/RW)">
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="kecamatan2" placeholder="Kecamatan" style="margin-left: 20%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="kelurahan2" placeholder="Kelurahan" style="margin-left: 41%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="kota2" placeholder="Kota / Desa" style="margin-left: 30%" ;>
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="kodePos2" placeholder="Kode Pos" style="margin-left: 20%;">
        </div>
      </div>


      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Tinggal Bersama</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Jenis Tinggal</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Jarak ke Sekolah</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="jrkSekolah" placeholder="meter / kilometer">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Alat Trasnportasi</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>

      <fieldset class="form-group mb-4">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Penerima Bantuan</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Ya
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
              <label class="form-check-label" for="gridRadios4">
                Tidak
              </label>
            </div>
          </div>
        </div>
      </fieldset>

      <fieldset class="form-group mb-4">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Bantuan</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                BSM
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
              <label class="form-check-label" for="gridRadios4">
                Bidik Misi
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                PIP
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                KKS
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                PKH
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">

              <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Other">
              </div>
            </div>

          </div>
        </div>
      </fieldset>


      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">No Tanda Bantuan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="tandaBantuan" placeholder="">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Data Ayah</label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="nmaAyah" placeholder="Nama Lengkap Ayah">
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="nikAyah" placeholder="NIK" style="margin-left: 20%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="tglLahirAyah" placeholder="Tanggal Lahir"
            style="margin-left: 41%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="pndidikanAkhirAyah" placeholder="Pendidikan Akhir"
            style="margin-left: 30%" ;>
        </div>

      </div>

      <div class="form-group row mb-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telpon</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="areaCode" placeholder="Area Code">
        </div>

        <div class="col-sm-4">
          <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
        </div>
      </div>

      <fieldset class="form-group mb-4">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Pekerjaan Ayah</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Buruh
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
              <label class="form-check-label" for="gridRadios4">
                Karyawan Swasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pedagang Kecil
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pedagang Besar
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pensiunan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                PNS/TNI/POLRI
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Sudah Meninggal
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Tidak Bekerja
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Wiraswasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">

              <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Other">
              </div>
            </div>
          </div>
        </div>
      </fieldset>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Penghasilan Ayah</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Data Ibu</label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="nmaIbu" placeholder="Nama Lengkap Ayah">
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="nikIbu" placeholder="NIK" style="margin-left: 20%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="tglLahirIbu" placeholder="Tanggal Lahir"
            style="margin-left: 41%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="pndidikanAkhirIbu" placeholder="Pendidikan Akhir"
            style="margin-left: 30%" ;>
        </div>

      </div>

      <div class="form-group row mb-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telpon</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="areaCode" placeholder="Area Code">
        </div>

        <div class="col-sm-4">
          <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
        </div>
      </div>

      <fieldset class="form-group mb-4">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Pekerjaan Ibu</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Buruh
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
              <label class="form-check-label" for="gridRadios4">
                Karyawan Swasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pedagang Kecil
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pedagang Besar
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pensiunan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                PNS/TNI/POLRI
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Sudah Meninggal
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Tidak Bekerja
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Wiraswasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">

              <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Other">
              </div>
            </div>
          </div>
        </div>
      </fieldset>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Penghasilan Ibu</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Data Wali</label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="nmaWali" placeholder="Nama Lengkap Ayah">
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="nikWali" placeholder="NIK" style="margin-left: 20%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="tglLahirWali" placeholder="Tanggal Lahir"
            style="margin-left: 41%;">
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="pndidikanAkhirWali" placeholder="Pendidikan Akhir"
            style="margin-left: 30%" ;>
        </div>

      </div>

      <div class="form-group row mb-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telpon</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="areaCode" placeholder="Area Code">
        </div>

        <div class="col-sm-4">
          <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
        </div>
      </div>

      <fieldset class="form-group mb-4">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Pekerjaan Wali</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Buruh
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
              <label class="form-check-label" for="gridRadios4">
                Karyawan Swasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pedagang Kecil
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pedagang Besar
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Pensiunan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                PNS/TNI/POLRI
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Sudah Meninggal
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Tidak Bekerja
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option1" checked>
              <label class="form-check-label" for="gridRadios3">
                Wiraswasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">

              <div class="col-sm-2">
                <input type="text" class="form-control" placeholder="Other">
              </div>
            </div>
          </div>
        </div>
      </fieldset>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Penghasilan Wali</label>
        <div class="col-sm-4">
          <select class="form-select form-select-sm-2" aria-label="Small select example">
            <option selected>Silahkan Pilih</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
      </div>


      <div class="form-group align-items-center mb-4">
        <p>Ketentuan File</p>
        <li style="text-indent: 3%;">File yang di upload atau di unggah adalah file asli ( bukan fotocopy-an )</li>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label"><b>Akta Kelahiran Calon Siswa</b></label>
        <div class="col-sm-4">
          <input class="form-control" type="file" id="fotoAkta" name="fotoAkta">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label"><b>Akta Kelahiran Calon Siswa</b></label>
        <div class="col-sm-4">
          <input class="form-control" type="file" id="formFile">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label"><b>Kartu Susunan Keluarga</b></label>
        <div class="col-sm-4">
          <input class="form-control" type="file" id="formFile">
        </div>
      </div>

      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label"><b>Kartu Tanda Penduduk (KTP) OrangTua/Wali</b></label>
        <div class="col-sm-4">
          <input class="form-control" type="file" id="formFile">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10 d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">DAFTAR</button>
        </div>
      </div>

    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>

</body>

</html>