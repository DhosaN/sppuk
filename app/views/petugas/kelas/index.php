<div class="container-fluid">
    <?php Flasher::flash(); ?>

    <div class="card shadow border-0 mb-4">
        <div class="card-header">
            <h6 class="font-weight-bold text-primary m-0">Daftar Kelas</h6>
            
        </div>
        <div class="card-body py-3">
            <table class="table table-bordered table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kelas</th>
                        <th>Kompetensi Keahlian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['kelas'] as $kelas):?>
                        <tr class="kelas-row" data-idkelas="<?=$kelas['id_kelas']?>">
                            <td>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw  text-gray-800"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Aksi:</div>
                                            <button class="dropdown-item" id="petugasEditKelasBtn" data-toggle="modal" data-target="#petugasKelasModal">Edit</button>
                                            <button class="dropdown-item text-danger" data-toggle="modal" data-target="#petugasDeleteKelasModal" id="petugasHapusKelasBtn">Hapus</button>
                                        </div>
                                    </div>
                            </td>
                            <td><?=$kelas['nama_kelas']?></td>
                            <td><?=$kelas['kompetensi_keahlian']?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <button class="btn btn-success col my-2" data-toggle="modal" data-target="#petugasKelasModal" id="petugasTambahKelasBtn">Tambah Data Kelas</button>
</div>

    <!-- Petugas SPP Modal-->
    <div class="modal fade" id="petugasKelasModal" tabindex="-1" role="dialog" aria-labelledby="petugasKelasModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="petugasKelasModalLabel">Tambah Data Kelas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-danger">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASE_URL?>/petugas-kelas/store" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" val="">
                            <label for="petugasKelasNamaInput">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama" id="petugasKelasNamaInput" maxlength="32" required>
                        </div>
                        <div class="form-group">
                            <label for="petugasKelasKompInput">Kompetensi Keahlian</label>
                            <input type="text" name="komp" id="petugasKelasKompInput" class="form-control" required maxlength="64">
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Petugas Delete SPP Modal-->
    <div class="modal fade" id="petugasDeleteKelasModal" tabindex="-1" role="dialog" aria-labelledby="petugasDeleteKelasModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="petugasDeleteKelasModalLabel">Hapus Data Kelas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin untuk hapus data kelas?
                    <form action="<?=BASE_URL?>/petugas-kelas/delete" method="post">
                        <input type="hidden" name="id" value="">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>