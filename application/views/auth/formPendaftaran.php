<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background-color: gainsboro; width: 100%; height: 100%;">
  <div class="container" style="background-position: 50%; background-color: gainsboro;">
    <section class="text-dark text-center text-sm-start" id="home">
      <div class="container py-4">
        <div class="d-sm-flex align-items-center justify-content-between py-5">
          <div style="margin-left: 15%;">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Logo_Kemendikbud.svg/1008px-Logo_Kemendikbud.svg.png"
                class="img-fluid" style="width: 65%;">
            </a>
          </div>
          <h2 class="my-4 text-dark text-center" style="margin-right: 20%;">FORM PENDAFTARAN SEKOLAH MENENGAH ATAS </h2>
        </div>
      </div>
      <hr />
    </section>
    <?= $this->session->flashdata('message'); ?>
    <form method="POST" action="<?= site_url('pendaftaran/register'); ?>" enctype="multipart/form-data">
      <div class="form-group row mb-4">
        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
            value="<?= set_value('nama_lengkap') ?>" placeholder="Nama Lengkap">
          <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
          <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
            <option value="">Jenis Kelamin</option>
            <option value="Laki-laki" <?= (set_value('jenis_kelamin') == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki
            </option>
            <option value="Perempuan" <?= (set_value('jenis_kelamin') == 'Perempuan') ? 'selected' : ''; ?>>Perempuan
            </option>
          </select>
          <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
            value="<?= set_value('tempat_lahir') ?>" placeholder="">
          <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-5">
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
            value="<?= set_value('tanggal_lahir') ?>" placeholder="">
          <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="no_akta_lahir" class="col-sm-2 col-form-label">No Akta Lahir</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="no_akta_lahir" name="no_akta_lahir"
            value="<?= set_value('no_akta_lahir') ?>" placeholder="">
          <?= form_error('no_akta_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik') ?>" placeholder="">
          <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke-</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?= set_value('nik') ?>"
            placeholder="">
          <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="jml_saudara" class="col-sm-2 col-form-label">Jumlah Saudara Kandung</label>
        <div class="col-sm-5">
          <input type="number" class="form-control" id="jml_saudara" name="jml_saudara"
            value="<?= set_value('jml_saudara') ?>" placeholder="">
          <?= form_error('jml_saudara', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="agama" name="agama" value="<?= set_value('agama') ?>"
            placeholder="Agama">
          <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Alamat Sesuai KK </label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat') ?>"
            placeholder="Alamat (beserta RT/RW)">
          <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= set_value('kecamatan') ?>"
            placeholder="Kecamatan" style="margin-left: 20%;">
          <div style="margin-left: 20%;">
            <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= set_value('kelurahan') ?>"
            placeholder="Kelurahan" style="margin-left: 41%;">
          <div style="margin-left: 41%;">
            <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="kota" name="kota" value="<?= set_value('kota') ?>"
            placeholder="Kota / Desa" style="margin-left: 30% ;">
          <div style="margin-left: 32% ;">
            <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="kodePos" name="kodePos" value="<?= set_value('kodePos') ?>"
            placeholder="Kode Pos" style="margin-left: 20%;">
          <div style="margin-left: 20%;">
            <?= form_error('kodePos', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Data Ayah</label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= set_value('nama_ayah') ?>"
            placeholder="Nama Lengkap Ayah">
          <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" value="<?= set_value('nik_ayah') ?>"
            placeholder="NIK" style="margin-left: 20%;">
          <div style="margin-left: 20%;">
            <?= form_error('nik_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="kerja_ayah" name="kerja_ayah"
            value="<?= set_value('kerja_ayah') ?>" placeholder="Pekerjaan Ayah" style="margin-left: 41%;">
          <div style="margin-left: 41%;">
            <?= form_error('kerja_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-sm-4 mb-4 ">
          <input type="text" class="form-control" id="no_telp_ayah" name="no_telp_ayah"
            value="<?= set_value('no_telp_ayah') ?>" placeholder="Phone Number" style="margin-left: 41%;">
          <div style="margin-left: 41%;">
            <?= form_error('no_telp_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
      </div>
      <div class="form-group row mb-4">
        <label for="" class="col-sm-2 col-form-label">Data Ibu</label>
        <div class="col-sm-8 mb-4">
          <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= set_value('nama_ibu') ?>"
            placeholder="Nama Lengkap Ibu">
          <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col-sm-8 mb-4 ms-5">
          <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" value="<?= set_value('nik_ibu') ?>"
            placeholder="NIK" style="margin-left: 20%;">
          <div style="margin-left: 20%;">
            <?= form_error('nik_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-sm-4 mb-4 ms-5">
          <input type="text" class="form-control" id="kerja_ibu" name="kerja_ibu" value="<?= set_value('kerja_ibu') ?>"
            placeholder="Pekerjaan Ibu" style="margin-left: 41%;">
          <div style="margin-left: 41%;">
            <?= form_error('kerja_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <input type="text" class="form-control" id="no_telp_ibu" name="no_telp_ibu"
            value="<?= set_value('no_telp_ibu') ?>" placeholder="Phone Number" style="margin-left: 41%;">
          <?= form_error('no_telp_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group align-items-center mb-4">
        <p>Ketentuan File</p>
        <li style="text-indent: 3%;">File yang di upload atau di unggah adalah file asli ( bukan fotocopy-an )</li>
      </div>
      <div class="form-group row mb-4">
        <label for="foto_kk" class="col-sm-2 col-form-label"><b>Kartu Keluarga</b></label>
        <div class="col-sm-4">
          <input class="form-control" type="file" id="foto_kk" name="foto_kk">
          <?= form_error('foto_kk', '<small class="text-danger pl-3">', '</small>'); ?>
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