<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom styles for this template-->
    <link href="<?=BASE_URL?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?=BASE_URL?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <title>LAPORAN PEMBAYARAN SPP (<?=date('d F Y')?>)</title>
</head>
<body>
    <div class="container-fluid">
        <div class="card my-4">
            <div class="card-header">
                <h6 class="text-warning font-weight-bold">Laporan Pembayaran SPPUK</h6>

                <hr>

                    <p class="font-weight-bold text-primary m-0">Tanggal</p>
                    <p><?=date('d F Y')?></p>

                    <p class="font-weight-bold text-primary m-0">Waktu</p>
                    <p><?=date('H:m:sa')?></p>

                <hr>

            </div>
            <div class="card-body py-3">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>Nama Siswa</th>
                        <th>
                            <center>
                                Kelas
                            </center>
                        </th>
                        <?php foreach($data['bulan'] as $key => $bulan): ?>
                            <th>
                                <center>
                                    <?php $key += $key + 7 > 12 ? -5 : 7?>
                                    <?=$key?>
                                </center>
                            </th>
                        <?php endforeach ?>
                    </thead>
                    <tbody>
                        <?php foreach($data['siswa'] as $siswa): ?>
                            <tr>
                                <td width="200px"><?=$siswa['nama_siswa']?></td>
                                <td width="50px">
                                    <center>
                                        <?=$siswa['nama_kelas']?>
                                    </center>
                                </td>
                                <?php foreach($data['bulan'] as $bulan): ?>
                                    <td>
                                        <center>

                                        <?php if(in_array($bulan, $data['pembayaran'][$siswa['id_siswa']])): ?>
                                            <p class="font-weight-bold text-success">v</p>

                                        <?php else: ?>
                                            <p class="font-weight-bold text-danger">x</p>

                                        <?php endif ?>
                                        </center>
                                    </td>
                                <?php endforeach ?>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=BASE_URL?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=BASE_URL?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=BASE_URL?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=BASE_URL?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=BASE_URL?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=BASE_URL?>/js/demo/datatables-demo.js"></script>

    <script>
        window.print()
    </script>
</body>
</html>