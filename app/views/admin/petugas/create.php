<div class="container-fluid">
    <div class="card shadow border-0 mb-4">
        <div class="card-header">
            <h6 class="font-weight-bold text-warning m-0">Tambah Data Petugas</h6>
        </div>
        <div class="card-body py-3">
            <form action="<?=BASE_URL?>/admin-petugas/store" method="post">
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
                            <label for="adminUsernamePetugasInput">Username</label>
                            <input type="text" class="form-control" name="username" id="adminUsernamePetugasInput" required maxlength="32">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="adminNamaPetugasInput">Nama Petugas</label>
                            <input type="text" class="form-control" name="nama" id="adminNamaPetugasInput" required maxlength="32">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adminLevelInput">Jabatan</label>
                        <select name="level" id="adminLevelInput" class="form-control">
                            <?php foreach($data['level'] as $level): ?>
                                <option value="<?=$level['id_level']?>"><?=$level['keterangan']?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="adminPasswordInput">Password</label>
                        <input type="text" name="password" id="adminPasswordInput" class="form-control" value="">
                        <small class="form-text text-danger">Gunakan password yang tediri 8-16 karakter, agar terhindar dari hal<sup>2</sup> yang tidak diinginkan!</small>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>