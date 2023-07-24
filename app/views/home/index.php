<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-2 col-md-6 mb-4 justify-content-right">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-m font-weight-bold text-gray-800 text-uppercase mb-1">
                                Hello Siswa </div>
                            <div class="h5 mb-0 font-weight-bold text-warning"><?=isset($_SESSION['user']) ? $_SESSION['user']['username'] : 'no data'?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-l font-weight-bold text text-uppercase text-center mb-1 mt-4">Menampilkan Video :</div><br>
    <div class="d-flex justify-content-center">
        <video controls autoplay muted width=900px justify-content-center src="<?= BASE_URL ?>/img/video_uk.mp4"></video>
    </div>
</div>