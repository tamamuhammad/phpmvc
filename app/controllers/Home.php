<?php 

class Home extends Controller {
    public function index(){
        $data['judul'] = __CLASS__;
        $data['nama'] = $this->model('User_models')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}