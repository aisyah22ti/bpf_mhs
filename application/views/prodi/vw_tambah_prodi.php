<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"> <?php echo $judul; ?>  </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?=set_value('nama')?> placeholder="Nama prodi">
                            <?=form_error('nama','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="ruangan">Ruangan</label>
                            <input type="number" name="ruangan" class="form-control" id="ruangan" value="<?=set_value('ruangan')?>" placeholder="ruangan">
                            <?=form_error('ruangan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" class="form-control" id="jurusan" value="<?=set_value('jurusan')?>">
                                <option value="">Jurusan</option>
                                <option value="TI">TI</option>
                                <option value="SI">SI</option>
                            </select>
                            <?=form_error('jurusan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi"  value="<?=set_value('akreditasi')?>" placeholder="akreditasi">
                            <?=form_error('akreditasi','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" value="<?=set_value('nama_kaprodi')?>" placeholder="nama kaprodi">
                            <?=form_error('nama_kaprodi','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri"value="<?=set_value('tahun_berdiri')?>" placeholder="tahun berdiri">
                            <?=form_error('tahun_berdiri','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" value="<?=set_value('output_lulusan')?>" placeholder="Output lulusan">
                            <?=form_error('output_lulusan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Prodi')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>