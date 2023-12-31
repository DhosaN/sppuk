<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="text-warning font-weight-bold m-0">Laporan Pembayaran SPP Siswa</h6>
        </div>
        <div class="card-body py-3" style="overflow-x: auto;">
            <table class="table table-striped table-bordered" id="dataTable">
                <thead>
                    <th>#</th>
                    <?php foreach($data['bulan'] as $bulan): ?>
                        <th><?=$bulan?></th>
                    <?php endforeach ?>
                </thead>
                <tbody>
                    <?php foreach($data['siswa'] as $siswa): ?>
                        <tr>
                            <td style="width: 200px;"><?=$siswa['nama_siswa']?></td>
                            <?php foreach($data['bulan'] as $bulan): ?>
                                <td>
                                    <?php if(in_array($bulan, $data['pembayaran'][$siswa['id_siswa']])): ?>
                                        <p class="font-weight-bold text-success">v</p>

                                    <?php else: ?>
                                        <p class="font-weight-bold text-danger">x</p>

                                    <?php endif ?>
                                    
                                </td>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <a target="_blank" href="<?=BASE_URL?>/admin-laporan/cetak" class="btn btn-success mb-3 col">Cetak Laporan</a>
</div>