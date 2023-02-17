<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics extends CI_Controller {

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
        $this->load->view('Admin/head');
        $this->load->view('Admin/Topik/view',$this->data_1);
        $this->load->view('Admin/Topik/add',$this->data);
        $this->load->view('Admin/footer');
    }
	
    public function tambah(){
		$topik = $this->Topik_model;
		$result =$topik->save();
		if($result > 0) $this->sukses();
		else $this->gagal();	
		
	}

	function sukses(){
        $this->session->set_flashdata('pesan_success', 'Data topik berhasil dibuat');
        redirect('Topics');
	}

	function gagal(){
        $this->session->set_flashdata('pesan_error', 'Data topik berhasil dibuat');
        redirect('Topics');
	}

	public function view_ubah($id_topik){
        $where = array('id_topik' => $id_topik);
        $data['topik'] = $this->Topik_model -> view_update ($where, 'topik') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/Topik/update', $data);
        $this->load->view('Admin/footer');
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
        redirect('Topics');
    }

	public function hapus($id_topik){
		$data = array(
            'id_topik'       => $id_topik,
            'status'        => 0
        );
        $this->Topik_model->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data topik berhasil dihapus');
        redirect('Topics');
    }
}
?>