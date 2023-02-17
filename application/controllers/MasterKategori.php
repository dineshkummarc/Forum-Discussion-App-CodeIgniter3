<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MasterKategori extends CI_controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("kategori_model");
		$this->load->library('session');
	}

	public function index()
	{
		$data["kategori"]=$this->kategori_model->getAll();
	    $this->load->view('Admin/head');
	    $this->load->view('Admin/Kategori Topik/view',$data);
		$this->load->view('Admin/footer');
	}

	public function input()
	{
		$x['idKategori']=$this->kategori_model->autoId();
		$this->load->view('Admin/head');
		$this->load->view('Admin/Kategori Topik/add',$x);
		$this->load->view('Admin/footer');
	}

	public function tambah(){
		$idKategori = $this->kategori_model->autoId();
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan Kategori', 'required|min_length[10]');

        $this->form_validation->set_message('required', "%s tidak boleh kosong.");
		$this->form_validation->set_message('min_length', "%s kurang dari 10 karakter.");

        if($this->form_validation->run() == TRUE) {
			$user = $this->kategori_model;
			$result =$user->save();
			if($result > 0) $this->sukses();
			else $this->gagal();	
		}
		$this->input();
	}

	function sukses(){
		$this->session->set_flashdata('pesan_success', 'Data kategori berhasil dibuat');
		redirect('masterkategori');
	}

	function gagal(){
		$this->session->set_flashdata('pesan_error', 'dibuat');
		redirect('masterkategori');
	}

	public function hapus($id_kategori){
        $where = array ('id_kategori' => $id_kategori);
        $this->kategori_model->delete($where, 'kategori');
		$this->session->set_flashdata('pesan_success', 'Data kategori berhasil dihapus');
        redirect('masterkategori');
    }

	 public function view_ubah($id_kategori){
        $where = array('id_kategori' => $id_kategori);
        $data['kategori'] = $this->kategori_model -> view_update ($where, 'kategori') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/Kategori Topik/update', $data);
        $this->load->view('Admin/footer');
    }

    public function update(){
        $id_kategori	= $this->input->post('id_kategori');
		$id_akun 		= $this->input->post('id_akun');
        $nama_kategori  = $this->input->post('nama_kategori');
        $keterangan     = $this->input->post('keterangan');

        $data = array(
			'id_kategori'   => $id_kategori,
			'id_akun'      	=> $id_akun,
			'nama_kategori' => $nama_kategori,
			'keterangan'    => $keterangan
        );

        $where = array(
            'id_kategori'       => $id_kategori
        );

        $this->kategori_model->update($where,$data,'kategori');
		$this->session->set_flashdata('pesan_success', 'Data kategori berhasil diubah');
        redirect('masterkategori');
    }
}
?>