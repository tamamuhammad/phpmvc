<?php 

class About extends Controller {
    public function index(){
        $data['judul'] = __CLASS__;
        $data['nama'] = $this->model('User_models')->getUser();
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}