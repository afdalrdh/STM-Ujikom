<?php

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
        if($this->session->userdata('id_level')!="1"){
			redirect('login');
		}
    }

    public function index(){
        $data['header'] = 'header';
        $data['content'] = 'admin/v_dashboard';
        $data['footer'] = 'footer';
        $data['pesawat'] = $this->m_admin->DashboardPesawat()->result();
        $data['kereta'] = $this->m_admin->DashboardKereta()->result();
        $data['penumpang'] = $this->m_admin->DashboardPenumpang()->result();
        $this->load->view('index',$data);
    }

    public function data_penumpang(){
		$data['kodeunik'] = $this->m_admin->BuatId();
        $data['header'] = 'header';
        $data['content'] = 'admin/v_data_penumpang';
        $data['footer'] = 'footer';
        $data['data_log'] = $this->m_admin->GetDataPenumpang()->result();
        $this->load->view('index',$data);
    }
    
    public function proses_tambah_penumpang(){
        
		if($this->input->post('btn') == "submit") {
            $this->m_admin->InsertDataPenumpang();
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('admin/data_penumpang');
		}
    }

    public function proses_edit_penumpang(){
        if($this->input->post('btn') == "submit") {
            $this->m_admin->UpdateDataPenumpang();
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('admin/data_penumpang');
		}
    }
    
    public function delete_penumpang($id){
        $where=array('id_penumpang' => $id);
        $res=$this->m_admin->DeleteData('tb_penumpang',$where);
        if($res>=1){
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_petugas');
        }
    }

    public function data_petugas(){
        $data['header'] = 'header';
        $data['content'] = 'admin/v_data_petugas';
        $data['footer'] = 'footer';
        $data['data_log'] = $this->m_admin->GetDataPetugas()->result();
        $this->load->view('index',$data);
    }

    public function proses_tambah_petugas(){
		if($this->input->post('btn') == "submit") {
            $this->m_admin->InsertDataPetugas();
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('admin/data_petugas');
		}
    }

    public function proses_edit_petugas(){
        if($this->input->post('btn') == "submit") {
            $this->m_admin->UpdateDataPetugas();
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('admin/data_petugas');
		}
    }
    
    public function delete_petugas($id){
        $where=array('id_petugas' => $id);
        $res=$this->m_admin->DeleteData('tb_petugas',$where);
        if($res>=1){
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_petugas');
        }
    }

    // ////////////////////////////////////////////////////////////////////////////////////RUTE

    public function data_rute(){
        $data['header'] = 'header';
        $data['content'] = 'admin/v_rute';
        $data['footer'] = 'footer';
        $data['data_log'] = $this->m_admin->GetDataRuteKereta()->result();
        $data['data_log2'] = $this->m_admin->GetDataRutePesawat()->result();
        $data['tipetransportasik'] = $this->m_admin->GetIdTipeKereta();
        $data['tipetransportasip'] = $this->m_admin->GetIdTipePesawat();
        $this->load->view('index',$data);
    }

    public function proses_tambah_rutekereta(){
		if($this->input->post('btn') == "submit") {
            $this->m_admin->InsertDataRuteKereta();
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('admin/data_rute');
		}
    }

    public function proses_tambah_rutepesawat(){
		if($this->input->post('btn') == "submit") {
            $this->m_admin->InsertDataRutePesawat();
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('admin/data_rute');
		}
    }

    public function delete_rutekereta($id){
        $where=array('id_rute' => $id);
        $res=$this->m_admin->DeleteData('tb_k_rute',$where);
        if($res>=1){
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_rute');
        }
    }
    
    public function proses_edit_rutekereta(){
        if($this->input->post('btn') == "submit") {
            $this->m_admin->UpdateDataRuteKereta();
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('admin/data_rute');
		}
    }

    public function delete_rutepesawat($id){
        $where=array('id_rute' => $id);
        $res=$this->m_admin->DeleteData('tb_p_rute',$where);
        if($res>=1){
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_rute');
        }
    }
    
    public function proses_edit_rutepesawat(){
        if($this->input->post('btn') == "submit") {
            $this->m_admin->UpdateDataRutePesawat();
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('admin/data_rute');
		}
    }



    // //////////////////////////////////////////////////////////////////////////////////////////KERETA

    public function data_kereta(){
        $data['header'] = 'header';
        $data['content'] = 'admin/v_data_kereta';
        $data['footer'] = 'footer';
        $data['rute'] = $this->m_admin->GetIdRute();
        $data['petugas'] = $this->m_admin->GetIdPetugas();
        $data['penumpang'] = $this->m_admin->GetIdPenumpang();
        $data['data_log'] = $this->m_admin->GetDataKereta()->result();
        $this->load->view('index',$data);
    }

    public function proses_tambah_kereta(){
		if($this->input->post('btn') == "submit") {
            $this->m_admin->InsertDataKereta();
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('admin/data_kereta');
		}
    }

    public function delete_kereta($id){
        $where=array('id_pemesanan' => $id);
        $res=$this->m_admin->DeleteData('tb_k_pemesanan',$where);
        if($res>=1){
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_kereta');
        }
    }
    
    public function proses_edit_kereta(){
        if($this->input->post('btn') == "submit") {
            $this->m_admin->UpdateDataKereta();
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('admin/data_kereta');
		}
    }
    
    public function data_transportasikereta(){
        $data['header'] = 'header';
        $data['content'] = 'admin/v_data_transportasikereta';
        $data['footer'] = 'footer';
        $data['tipetransportasi'] = $this->m_admin->GetIdTipeTransportasiKereta();
        $data['data_log'] = $this->m_admin->GetDataTransportasiKereta()->result();
        $this->load->view('index',$data);
    }

    public function proses_tambah_transportasikereta(){
		if($this->input->post('btn') == "submit") {
            $this->m_admin->InsertDataTransportasiKereta();
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('admin/data_transportasikereta');
		}
    }

    public function delete_transportasikereta($id){
        $where=array('id_transportasi' => $id);
        $res=$this->m_admin->DeleteData('tb_p_transportasi',$where);
        if($res>=1){
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_transportasikereta');
        }
    }
    
    public function proses_edit_transportasikereta(){
        if($this->input->post('btn') == "submit") {
            $this->m_admin->UpdateDataTransportasiKereta();
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('admin/data_transportasikereta');
		}
    }




    // ////////////////////////////////////////////////////////////////////////////////////////////PESAWAT

    public function data_pesawat(){
        $data['header'] = 'header';
        $data['content'] = 'admin/v_data_pesawat';
        $data['footer'] = 'footer';
        $data['rute'] = $this->m_admin->GetDataRutePesawat();
        $data['petugas'] = $this->m_admin->GetIdPetugas();
        $data['penumpang'] = $this->m_admin->GetIdPenumpang();
        $data['data_log'] = $this->m_admin->GetDataPesawat()->result();
        $this->load->view('index',$data);
    }

    public function proses_tambah_pesawat(){
		if($this->input->post('btn') == "submit") {
            $this->m_admin->InsertDataPesawat();
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('admin/data_pesawat');
		}
    }

    public function delete_pesawat($id){
        $where=array('id_pemesanan' => $id);
        $res=$this->m_admin->DeleteData('tb_p_pemesanan',$where);
        if($res>=1){
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_pesawat');
        }
    }
    
    public function proses_edit_pesawat(){
        if($this->input->post('btn') == "submit") {
            $this->m_admin->UpdateDataPesawat();
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('admin/data_pesawat');
		}
    }

    public function data_transportasipesawat(){
        $data['header'] = 'header';
        $data['content'] = 'admin/v_data_transportasipesawat';
        $data['footer'] = 'footer';
        $data['tipetransportasi'] = $this->m_admin->GetIdTipeTransportasiPesawat();
        $data['data_log'] = $this->m_admin->GetDataTransportasiPesawat()->result();
        $this->load->view('index',$data);
    }

    public function proses_tambah_transportasipesawat(){
		if($this->input->post('btn') == "submit") {
            $this->m_admin->InsertDataTransportasiPesawat();
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('admin/data_transportasipesawat');
		}
    }

    public function delete_transportasipesawat($id){
        $where=array('id_transportasi' => $id);
        $res=$this->m_admin->DeleteData('tb_p_transportasi',$where);
        if($res>=1){
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/data_transportasipesawat');
        }
    }
    
    public function proses_edit_transportasipesawat(){
        if($this->input->post('btn') == "submit") {
            $this->m_admin->UpdateDataTransportasiPesawat();
            $this->session->set_flashdata('flash', 'dirubah');
            redirect('admin/data_transportasipesawat');
		}
    }



}
