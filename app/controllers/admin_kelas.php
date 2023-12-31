<?php

class Admin_kelas extends Controller {
    public function index()
    {
        Middleware::onlyAdmin();

        $kelas = $this->model('kelas_model')->getAllKelas();

        $data = [
            'title' => 'Manajemen Kelas',
            'heading' => 'manajemen kelas',
            'options' => 'daftar kelas',
            'kelas' => $kelas,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/kelas/index', $data);
        $this->view('templates/footer');
    }

    public function store()
    {
        Middleware::onlyAdmin();

        $data = [
            'nama' => $_POST['nama'],
            'komp' => $_POST['komp'],
        ];

        if ($this->model('kelas_model')->addKelas($data))
        {
            Flasher::setFlash('Data kelas berhasil ditambahkan!', 'success');
            Direct::directTo('/admin-kelas');
        }
        Flasher::setFlash('Gagal menambahkan data kelas!', 'danger');
        Direct::directTo('/admin-kelas');
    }

    public function update()
    {
        Middleware::onlyAdmin();

        $data = [
            'id' => $_POST['id'],
            'nama' => $_POST['nama'],
            'komp' => $_POST['komp'],
        ];

        if ($this->model('kelas_model')->updateKelasById($data) > 0)
        {
            Flasher::setFlash('Data kelas berhasil diubah!', 'success');
            Direct::directTo('/admin-kelas');
        }
        Flasher::setFlash('Gagal merubah data kelas!', 'danger');
        Direct::directTo('/admin-kelas');
    }

    public function delete()
    {
        Middleware::onlyAdmin();

        if ($this->model('kelas_model')->deleteKelasById($_POST['id']) > 0)
        {
            Flasher::setFlash('Data kelas berhasil dihapus!', 'success');
            Direct::directTo('/admin-kelas');
        }
        Flasher::setFlash('Gagal menghapus data kelas', 'danger');
        Direct::directTo('/admin-kelas');
    }

    public function getKelasData()
    {
        
        echo json_encode($this->model('kelas_model')->getKelasById($_POST['id']));
    }
}