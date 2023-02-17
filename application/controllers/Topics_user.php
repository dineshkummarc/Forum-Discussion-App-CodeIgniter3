<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics_user extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model("Topik_model");
        $this->load->model("Komentar_model");
		$this->load->library('session');
	}

	public function index()
    { 
        $this->data["datakategori"] = $this->Topik_model->get_topik();
        $this->data_1["topik"]=$this->Topik_model->getAll();
        $this->data_1['idTopik']=$this->Topik_model->autoId();
        $this->load->view('User/headuser');
        $this->load->view('User/lihat_topik',$this->data_1);
        $this->load->view('User/tambah_topik_user',$this->data);
        $this->load->view('User/footeruser');
    }
	
    public function tambah(){
		$topik = $this->Topik_model;
		$result =$topik->save();
		if($result > 0) $this->sukses();
		else $this->gagal();	
		
	}

	function sukses(){
        $this->session->set_flashdata('pesan_success', 'Data topik berhasil dibuat');
        redirect('Topics_user');
	}

	function gagal(){
        $this->session->set_flashdata('pesan_error', 'dibuat');
        redirect('Topics_user');
	}

	public function view_ubah($id_topik){
        $where = array('id_topik' => $id_topik);
        $data['topik'] = $this->Topik_model -> view_update ($where, 'topik') -> result();
        $this->load->view('User/headuser');
        $this->load->view('User/edit_topik_user', $data);
        $this->load->view('User/footeruser');
    }

    // Simpan Ubah ke Database
    public function update(){

		$post = $this->input->post();	
		$id_topik 		= $this->input->post('id_topik');
        $id_kategori	= $this->input->post('id_kategori');
        $id_akun		= $this->input->post('id_akun');
        $judul_topik	= $this->input->post('judul_topik');
        $isi_topik    	= $this->input->post('isi_topik');
        $waktu_topik	= $this->input->post('waktu_topik');

        $data = array(
			'id_topik'      => $id_topik,
			'id_kategori'   => $id_kategori,
			'id_akun'     	=> $id_akun,
			'judul_topik'  	=> $judul_topik,
            'isi_topik'     => $isi_topik,
            'waktu_topik'   => $waktu_topik,
			'status'      	=> 1
        );

        $where = array(
            'id_topik'       => $id_topik
        );

        $this->Topik_model->update($where,$data,'topik');
        $this->session->set_flashdata('pesan_success', 'Data topik berhasil diubah');
        redirect('Topics_user');
    }

	public function hapus($id_topik){
		$data = array(
            'id_topik'       => $id_topik,
            'status'        => 0
        );
        $this->Topik_model->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data topik berhasil dihapus');
        redirect('Topics_user');
    }
}
?>