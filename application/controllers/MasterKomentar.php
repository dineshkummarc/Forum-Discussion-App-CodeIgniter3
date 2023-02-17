<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MasterKomentar extends CI_controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Komentar_model");
		$this->load->model("Balasan_model");
		$this->load->model("Topik_model");
		$this->load->library('session');
	}

	public function index($id_topik){
        $where = array('id_topik' => $id_topik);
		$data['balasan'] = $this->Balasan_model -> getBalasan();
        $data['topik'] = $this->Topik_model -> view_update2($where, 'topik') -> result();
		$data['komentar'] = $this->Komentar_model -> view_komentar($where, 'view_komentar') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/View Forum/view_forum', $data);
        $this->load->view('Admin/footer');
    }
	
    public function view_topik($id_topik){
        $where = array('id_topik' => $id_topik);
		$data['balasan'] = $this->Balasan_model -> getBalasan();
		$data["detailtopik"]=$this->Topik_model->getAll();
		//$data["detailtopik"]=$this->Topik_model->getAll1();
        $data['topik'] = $this->Topik_model -> view_update2($where, 'topik') -> result();
		$data['komentar'] = $this->Komentar_model -> view_komentar($where, 'view_komentar') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/View Forum/view_forum', $data);
        $this->load->view('Admin/footer');
    }

	public function tambah(){
		$id = $this->input->post('id_topik');
		
        $this->form_validation->set_rules('isi_komentar', 'isi_komentar', 'required');
        $this->form_validation->set_message('required', "%s tidak boleh kosong.");

        if($this->form_validation->run() == TRUE) {
			$komentar = $this->Komentar_model;
			$result =$komentar->save();
			if($result > 0) $this->sukses();
			else $this->gagal();	
		}
		redirect('masterkomentar/view_topik/'.$id);
	}
	function sukses(){
		$id = $this->input->post('id_topik');
		$this->session->set_flashdata('pesan_success', 'Data komentar berhasil dibuat');
		redirect('masterkomentar/view_topik/'.$id);
	}
	function gagal(){
		$id = $this->input->post('id_topik');
		$this->session->set_flashdata('pesan_error', 'Data komentar gagal dibuat');
		redirect('masterkomentar/view_topik/'.$id);
	}
	
	public function hapus($id_komentar){
		$data = array(
            'id_komentar'       => $id_komentar,
            'status'        => 0
        );
        $this->Komentar_model->delete($data);
		$this->session->set_flashdata('pesan_success', 'Data komentar berhasil dihapus');
        redirect('Topics');
    }

	 public function view_ubah($id_komentar){
        $where = array('id_komentar' => $id_komentar);
        $data['komentar'] = $this->Komentar_model -> update_komentar ($where, 'komentar') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/Komentar/update', $data);
        $this->load->view('Admin/footer');
    }

    public function update(){
		$id = $this->input->post('id_topik');
		date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d H:i:s");

        $id_komentar	= $this->input->post('id_komentar');
		$id_topik	= $this->input->post('id_topik');
        $id_akun	= $this->input->post('id_akun');
        $isi_komentar  = $this->input->post('isi_komentar');
    
        $data = array(
		'id_komentar'   => $id_komentar,
		'id_topik'   => $id_topik,
 		'id_akun'      	=> $id_akun,
 		'isi_komentar' => $isi_komentar,
 		'waktu_komentar'    => $tanggal
	     );

	     $where = array(
             'id_komentar'       => $id_komentar
         );

        $this->Komentar_model->update($where,$data,'komentar');
		$this->session->set_flashdata('pesan_success', 'Data komentar berhasil diubah');
		redirect('masterkomentar/view_topik/'.$id);
    }
}
?>