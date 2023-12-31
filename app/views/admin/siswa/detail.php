<div class="container-fluid">
    <div class="card shadow border-0 mb-4">
        <div class="card-header">
            <h6 class="font-weight-bold text-primary m-0">Detail Data Siswa</h6>
        </div>
        <div class="card-body py-3">
            <form action="<?=BASE_URL?>/admin-siswa/update" method="post">
            <div class="form-row">
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <div class="col-8">
                        <img class="img-profile rounded-circle"
                            src="<?=BASE_URL?>/img/undraw_profile.svg">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="adminNisnInput">NISN</label>
                            <input type="hidden" name="id" value="<?=$data['siswa']['id_siswa']?>">
                            <input type="hidden" name="id_pengguna" value="<?=$data['siswa']['id_pengguna']?>">
                            <input type="text" class="form-control" name="nisn" id="adminNisnInput" required maxlength="10" value="<?=$data['siswa']['nisn']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="adminNisInput">NIS</label>
                            <input type="text" class="form-control" name="nis" id="adminNisInput" required maxlength="5" value="<?=$data['siswa']['nis']?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="adminNamaInput">Nama Siswa</label>
                            <input type="text" class="form-control" name="nama" id="adminNamaInput" required maxlength="50" value="<?=$data['siswa']['nama_siswa']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="adminTelpInput">Telp</label>
                            <input type="text" class="form-control" name="telp" id="adminTelpInput" required maxlength="13" value="<?=$data['siswa']['no_telp']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adminAlamatInput">Alamat</label>
                        <textarea name="alamat" id="adminAlamatInput" class="form-control" cols="30" rows="5" required><?=$data['siswa']['alamat']?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="adminKelasInput">Kelas</label>
                            <select name="kelas" id="adminKelasInput" class="form-control" required>
                                <option value="<?=$data['siswa']['id_kelas']?>" selected><?=$data['siswa']['nama_kelas']?></option>
                                <?php foreach($data['kelas'] as $kelas): ?>
                                    <option value="<?=$kelas['id_kelas']?>"><?=$kelas['nama_kelas']?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="adminSppInput">SPP</label>
                            <select name="spp" id="adminSppInput" class="form-control" required>
                                <option value="<?=$data['siswa']['id_spp']?>"><?=$data['siswa']['tahun']?> (<?=$data['siswa']['nominal']?>)</option>
                                <?php foreach($data['spp'] as $spp): ?>
                                    <option value="<?=$spp['id_spp']?>"><?=$spp['tahun']?> (Rp<?=$spp['nominal']?>)</option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>