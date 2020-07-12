<?php

class Petugas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_petugas');
    }

	public function index(){
        $this->load->view('petugas/index');
    }

}
