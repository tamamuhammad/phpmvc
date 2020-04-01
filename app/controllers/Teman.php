<?php 

class Teman extends Controller {
    public function index(){
        $data['judul'] = 'Daftar Teman';
        $data['teman'] = $this->model('Teman_models')->getTeman();
        $this->view('templates/header', $data);
        $this->view('teman/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Teman';
        $data['teman'] = $this->model('Teman_models')->getTemanbyId($id);
        $this->view('templates/header', $data);
        $this->view('teman/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if( $this->model('Teman_models')->getTemanBaru($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/teman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/teman');
            exit;
        }
    }

    public function hapus($id){
        if( $this->model('Teman_models')->hapusTeman($id) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/teman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/teman');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Teman_models')->getTemanbyId($_POST['id']));
    }

    public function ubah(){
        if( $this->model('Teman_models')->ubahTeman($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/teman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/teman');
            exit;
        }
    }

    public function cari(){
        $data['judul'] = 'Hasil Pencarian';
        $data['teman'] = $this->model('Teman_models')->cariTeman($_POST);
        $this->view('templates/header', $data);
        $this->view('teman/index', $data);
        $this->view('templates/footer');
    }
}