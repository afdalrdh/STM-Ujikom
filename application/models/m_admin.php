<?php

class M_admin extends CI_Model{

    public function DashboardPesawat(){
        $this->db->select("COUNT(id_pemesanan) as pesawat");
        $this->db->from("tb_p_pemesanan");
        
        return $this->db->get();
    }
    
    public function DashboardKereta(){
        $this->db->select("COUNT(id_pemesanan) as kereta");
        $this->db->from("tb_k_pemesanan");
        
        return $this->db->get();
	}

    public function DashboardPenumpang(){
        $this->db->select("COUNT(id_penumpang) as penumpang");
        $this->db->from("tb_penumpang");
        
        return $this->db->get();
    }
    
    public function DashboardRute(){
        $this->db->select("COUNT(id_penumpang) as penumpang");
        $this->db->from("tb_penumpang");
        
        return $this->db->get();
	}


    public function UpdateData($tableName,$data,$where){
        $res = $this->db->update($tableName,$data,$where);
        return $res;
    }

    public function DeleteData($tableName,$where){
        $res = $this->db->delete($tableName,$where);
        return $res;
    }

    public function BuatId(){
        $this->db->select('RIGHT(tb_penumpang.id_penumpang,1) as kode', FALSE);
        $this->db->order_by('id_penumpang','DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_penumpang');
        if($query->num_rows() <> 0){
        $data = $query->row();
        $kode = intval($data->kode) + 1;
        }
        else {
        $kode = 1;
        }
        return $kode;
    }

    public function KodePesawat(){
        $this->db->select('RIGHT(tb_penumpang.id_penumpang,1) as kode', FALSE);
        $this->db->order_by('id_penumpang','DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_penumpang');
        if($query->num_rows() <> 0){
        $data = $query->row();
        $kode = intval($data->kode) + 1;
        }
        else {
        $kode = 1;
        }
        return $kode;
    }

    public function InsertData($tableName,$data){
        $res = $this->db->insert($tableName,$data);
        return $res;
    }

    //////////////////////////////////////////////////////////////////////////////////// DATA PENUMPANG
    public function GetDataPenumpang(){
        $this->db->select("*");
        $this->db->from("tb_penumpang");
        
        return $this->db->get();
    }

    public function InsertDataPenumpang(){
        $data = [
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('pass', true),
			'nama_penumpang' => $this->input->post('nama', true),
			'alamat_penumpang' => $this->input->post('alamat', true),
			'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
			'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
			'telefone' => $this->input->post('telefone', true),
        ];

        $this->db->insert('tb_penumpang', $data);
    }

    public function UpdateDataPenumpang(){
        $data = [
			'password' => $this->input->post('pass', true),
			'nama_penumpang' => $this->input->post('nama', true),
			'alamat_penumpang' => $this->input->post('alamat', true),
			'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
			'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
			'telefone' => $this->input->post('telefone', true),
        ];

        $this->db->where('id_penumpang', $this->input->post('id'));
        $this->db->update('tb_penumpang', $data);
    }



    //////////////////////////////////////////////////////////////////////////////////// DATA PETUGAS
    public function GetDataPetugas(){
        $this->db->select("*");
        $this->db->from("tb_petugas");
        
        return $this->db->get();
    }

    public function InsertDataPetugas(){
        $data = [
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('pass', true),
			'nama_petugas' => $this->input->post('nama', true),
			'id_level' => $this->input->post('level', true)
        ];

        $this->db->insert('tb_petugas', $data);
    }

    public function UpdateDataPetugas(){
        $data = [
			'password' => $this->input->post('pass', true),
			'nama_petugas' => $this->input->post('nama', true),
			'id_level' => $this->input->post('level', true),
        ];

        $this->db->where('id_petugas', $this->input->post('id'));
        $this->db->update('tb_petugas', $data);
    }


// //////////////////////////////////////////////////////////////////////////////// ID ID AN

    public function GetIdPenumpang(){
        $this->db->select("id_penumpang");
        $this->db->from("tb_penumpang");
        return $this->db->get();
    }

    public function GetIdPetugas(){
        $this->db->select("id_petugas");
        $this->db->from("tb_petugas");
        return $this->db->get();
    }

    public function GetIdTipeTransportasiPesawat(){
        $this->db->select("id_type_transportasi");
        $this->db->from("tb_p_type_transportasi");
        return $this->db->get();
    }

    public function GetIdTipeTransportasiKereta(){
        $this->db->select("id_type_transportasi");
        $this->db->from("tb_k_type_transportasi");
        return $this->db->get();
    }

    public function GetIdTipePesawat(){
        $this->db->select("id_transportasi");
        $this->db->from("tb_p_transportasi");
        return $this->db->get();
    }

    public function GetIdTipeKereta(){
        $this->db->select("id_transportasi");
        $this->db->from("tb_k_transportasi");
        return $this->db->get();
    }

    // ///////////////////////////////////////////////////////////////////////////////////RUTE
    public function GetDataRutePesawat(){
        $this->db->select("*");
        $this->db->from("tb_p_rute");
        
        return $this->db->get();
    }

    public function GetDataRuteKereta(){
        $this->db->select("*");
        $this->db->from("tb_k_rute");
        
        return $this->db->get();
    }

    public function InsertDataRuteKereta(){
        $data = [
			'tujuan' => $this->input->post('tujuan', true),
			'rute_awal' => $this->input->post('rute_awal', true),
			'rute_akhir' => $this->input->post('rute_akhir', true),
			'harga' => $this->input->post('harga', true),
            'id_transportasi' => $this->input->post('id_transportasi', true)
        ];

        $this->db->insert('tb_k_rute', $data);
    }

    public function UpdateDataRuteKereta(){
        $data = [
			'tujuan' => $this->input->post('tujuan', true),
			'rute_awal' => $this->input->post('rute_awal', true),
			'rute_akhir' => $this->input->post('rute_akhir', true),
			'harga' => $this->input->post('harga', true),
            'id_transportasi' => $this->input->post('id_transportasi', true)
        ];

        $this->db->where('id_rute', $this->input->post('id_rute'));
        $this->db->update('tb_k_rute', $data);
    }

    public function InsertDataRutePesawat(){
        $data = [
			'tujuan' => $this->input->post('tujuan', true),
			'rute_awal' => $this->input->post('rute_awal', true),
			'rute_akhir' => $this->input->post('rute_akhir', true),
			'harga' => $this->input->post('harga', true),
            'id_transportasi' => $this->input->post('id_transportasi', true)
        ];

        $this->db->insert('tb_p_rute', $data);
    }

    public function UpdateDataRutePesawat(){
        $data = [
			'tujuan' => $this->input->post('tujuan', true),
			'rute_awal' => $this->input->post('rute_awal', true),
			'rute_akhir' => $this->input->post('rute_akhir', true),
			'harga' => $this->input->post('harga', true),
            'id_transportasi' => $this->input->post('id_transportasi', true)
        ];

        $this->db->where('id_rute', $this->input->post('id_rute'));
        $this->db->update('tb_p_rute', $data);
    }


    ///////////////////////////////////////////////////////////////////////////////////////// KERETA
    public function GetDataKereta(){
        $this->db->select("*");
        $this->db->from("tb_k_pemesanan");
        
        return $this->db->get();
    }
    
    public function InsertDataKereta(){
        $data = [
			'kode_pemesanan' => $this->input->post('kode_pemesanan', true),
			'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan', true),
			'tempat_pemesanan' => $this->input->post('tempat_pemesanan', true),
			'id_penumpang' => $this->input->post('id_penumpang', true),
            'kode_kursi' => $this->input->post('kode_kursi', true),
			'id_rute' => $this->input->post('id_rute', true),
			'tujuan' => $this->input->post('tujuan', true),
            'tanggal_berangkat' => $this->input->post('tanggal_berangkat', true),
			'jam_cekin' => $this->input->post('jam_cekin', true),
			'jam_berangkat' => $this->input->post('jam_berangkat', true),
            'total_bayar' => $this->input->post('total_bayar', true),
			'id_petugas' => $this->input->post('id_petugas', true)
        ];

        $this->db->insert('tb_k_pemesanan', $data);
    }

    public function UpdateDataKereta(){
        $data = [
			'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan', true),
			'tempat_pemesanan' => $this->input->post('tempat_pemesanan', true),
			'id_penumpang' => $this->input->post('id_penumpang', true),
            'kode_kursi' => $this->input->post('kode_kursi', true),
			'id_rute' => $this->input->post('id_rute', true),
			'tujuan' => $this->input->post('tujuan', true),
            'tanggal_berangkat' => $this->input->post('tanggal_berangkat', true),
			'jam_cekin' => $this->input->post('jam_cekin', true),
			'jam_berangkat' => $this->input->post('jam_berangkat', true),
            'total_bayar' => $this->input->post('total_bayar', true),
			'id_petugas' => $this->input->post('id_petugas', true)
        ];

        $this->db->where('id_pemesanan', $this->input->post('id'));
        $this->db->update('tb_k_pemesanan', $data);
    }

    public function GetDataTransportasiKereta(){
        $this->db->select("*");
        $this->db->from("tb_k_transportasi");
        
        return $this->db->get();
    }

    public function InsertDataTransportasiKereta(){
        $data = [
			'kode' => $this->input->post('kode', true),
			'jumlah_kursi' => $this->input->post('jumlah_kursi', true),
			'keterangan' => $this->input->post('keterangan', true),
			'id_type_transportasi' => $this->input->post('id_tipe_transportasi', true)
        ];

        $this->db->insert('tb_k_transportasi', $data);
    }

    public function UpdateDataTransportasiKereta(){
        $data = [
			'jumlah_kursi' => $this->input->post('jumlah_kursi', true),
			'keterangan' => $this->input->post('keterangan', true),
			'id_type_transportasi' => $this->input->post('id_tipe_transportasi', true)
        ];

        $this->db->where('id_transportasi', $this->input->post('id_transportasi'));
        $this->db->update('tb_k_transportasi', $data);
    }




    /////////////////////////////////////////////////////////////////////////////////////////// PESAWAT
    public function GetDataPesawat(){
        $this->db->select("*");
        $this->db->from("tb_p_pemesanan");
        
        return $this->db->get();
    }

    public function InsertDataPesawat(){
        $data = [
			'kode_pemesanan' => $this->input->post('kode_pemesanan', true),
			'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan', true),
			'tempat_pemesanan' => $this->input->post('tempat_pemesanan', true),
			'id_penumpang' => $this->input->post('id_penumpang', true),
            'kode_kursi' => $this->input->post('kode_kursi', true),
			'id_rute' => $this->input->post('id_rute', true),
			'tujuan' => $this->input->post('tujuan', true),
            'tanggal_berangkat' => $this->input->post('tanggal_berangkat', true),
			'jam_cekin' => $this->input->post('jam_cekin', true),
			'jam_berangkat' => $this->input->post('jam_berangkat', true),
            'total_bayar' => $this->input->post('total_bayar', true),
			'id_petugas' => $this->input->post('id_petugas', true)
        ];

        $this->db->insert('tb_p_pemesanan', $data);
    }

    public function UpdateDataPesawat(){
        $data = [
			'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan', true),
			'tempat_pemesanan' => $this->input->post('tempat_pemesanan', true),
			'id_penumpang' => $this->input->post('id_penumpang', true),
            'kode_kursi' => $this->input->post('kode_kursi', true),
			'id_rute' => $this->input->post('id_rute', true),
			'tujuan' => $this->input->post('tujuan', true),
            'tanggal_berangkat' => $this->input->post('tanggal_berangkat', true),
			'jam_cekin' => $this->input->post('jam_cekin', true),
			'jam_berangkat' => $this->input->post('jam_berangkat', true),
            'total_bayar' => $this->input->post('total_bayar', true),
			'id_petugas' => $this->input->post('id_petugas', true)
        ];

        $this->db->where('id_pemesanan', $this->input->post('id'));
        $this->db->update('tb_p_pemesanan', $data);
    }

    public function GetDataTransportasiPesawat(){
        $this->db->select("*");
        $this->db->from("tb_p_transportasi");
        
        return $this->db->get();
    }

    public function InsertDataTransportasiPesawat(){
        $data = [
			'kode' => $this->input->post('kode', true),
			'jumlah_kursi' => $this->input->post('jumlah_kursi', true),
			'keterangan' => $this->input->post('keterangan', true),
			'id_type_transportasi' => $this->input->post('id_tipe_transportasi', true)
        ];

        $this->db->insert('tb_p_transportasi', $data);
    }

    public function UpdateDataTransportasiPesawat(){
        $data = [
			'jumlah_kursi' => $this->input->post('jumlah_kursi', true),
			'keterangan' => $this->input->post('keterangan', true),
			'id_type_transportasi' => $this->input->post('id_tipe_transportasi', true)
        ];

        $this->db->where('id_transportasi', $this->input->post('id_transportasi'));
        $this->db->update('tb_p_transportasi', $data);
    }


}
?>