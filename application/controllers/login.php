<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index(){
        $this->load->view('v_login');
        $this->session->sess_destroy();
    }

    public function login2(){
        $this->load->view('v_login2');
        $this->session->sess_destroy();
    }

    function aksi_login(){
        $user=$this->input->post('username');
        $pass=$this->input->post('password');
        
        $ceklogin=$this->m_login->login($user,$pass);

        if($ceklogin){
            foreach($ceklogin as $row);
            $this->session->set_userdata('nama', $row->nama_petugas);
            $this->session->set_userdata('id_level', $row->id_level);
            
            if($this->session->userdata('id_level')=="1"){
                redirect('admin/index');
            }elseif($this->session->userdata('id_level')=="2") {
                redirect('petugas/index');
            }
        }else{
            echo "<script>alert('Username/Password anda Salah');history.go(-1);</script>";
        }

    }

}
?>
