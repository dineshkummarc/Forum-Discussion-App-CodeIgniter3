<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discuss extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model("akun_model");
        $this->load->model("kategori_model");
        $this->load->model("Topik_model");
		$this->load->library('session');
	}

    public function index()
    {
        $data["user"]=$this->akun_model->jumlah_akun();
        $data["kategori"]=$this->kategori_model->jumlah_kategori();
        $data["topik"]=$this->Topik_model->jumlah_topik();
        $this->load->view('Admin/head');
        $this->load->view('Admin/discuss', $data);
        $this->load->view('Admin/footer');
    }
}
?>