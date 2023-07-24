<?php

class Petugas_kelas extends Controller {
    public function index()
    {
        Middleware::onlyPetugas();

        $kelas = $this->model('kelas_model')->getAllKelas();

        $data = [
            'title' => 'Manajemen Kelas',
            'heading' => 'manajemen kelas',
            'options' => 'daftar kelas',
            'kelas' => $kelas,
        ];

        $this->view('templates/header', $data);
        $this->view('petugas/kelas/index', $data);
        $this->view('templates/footer');
    }

    public function store()
    {
        Middleware::onlyPetugas();

        $data = [
            'nama' => $_POST['nama'],
            'komp' => $_POST['komp'],
        ];

        if ($this->model('kelas_model')->addKelas($data))
        {
            Flasher::setFlash('Data kelas berhasil ditambahkan!', 'success');
            Direct::directTo('/petugas-kelas');
        }
        Flasher::setFlash('Gagal menambahkan data kelas!', 'danger');
        Direct::directTo('/petugas-kelas');
    }

    public function update()
    {
        Middleware::onlyPetugas();

        $data = [
            'id' => $_POST['id'],
            'nama' => $_POST['nama'],
            'komp' => $_POST['komp'],
        ];

        if ($this->model('kelas_model')->updateKelasById($data) > 0)
        {
            Flasher::setFlash('Data kelas berhasil diubah!', 'success');
            Direct::directTo('/petugas-kelas');
        }
        Flasher::setFlash('Gagal merubah data kelas!', 'danger');
        Direct::directTo('/petugas-kelas');
    }

    public function delete()
    {
        Middleware::onlyPetugas();

        if ($this->model('kelas_model')->deleteKelasById($_POST['id']) > 0)
        {
            Flasher::setFlash('Data kelas berhasil dihapus!', 'success');
            Direct::directTo('/petugas-kelas');
        }
        Flasher::setFlash('Gagal menghapus data kelas', 'danger');
        Direct::directTo('/petugas-kelas');
    }

    public function getKelasData()
    {
        echo json_encode($this->model('kelas_model')->getKelasById($_POST['id']));
    }
}