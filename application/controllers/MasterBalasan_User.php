<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MasterBalasan_User extends CI_controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Balasan_model");
		$this->load->library('session');
	}

	public function view_balasan($id_komentar){
		$data['balasan'] = $this->Balasan_model -> view_balasan($where, 'view_balasan') -> result();
        $this->load->view('User/headuser');
        $this->load->view('User/view_forum', $data);
        $this->load->view('User/footeruser');
    }

	public function tambah(){
        $balasan = $this->Balasan_model;
		$result =$balasan->save();
		if($result > 0) $this->sukses();
		else $this->gagal();
	}
	function sukses(){
		$id = $this->input->post('id_topik');	
		$this->session->set_flashdata('pesan_success', 'Data balasan berhasil dibuat');
		redirect('MasterKomentar_User/view_topik/'.$id);
	}
	function gagal(){
		$id = $this->input->post('id_topik');	
		$this->session->set_flashdata('pesan_error', 'Data balasan gagal dibuat');
		redirect('MasterKomentar_User/view_topik/'.$id);
	}

	// hapus data dari database
	public function hapus($id_balasan){
        $where = array ('id_balasan' => $id_balasan);
        $this->Balasan_model->delete2($where, 'balasan');
		$this->session->set_flashdata('pesan_success', 'Data balasan berhasil dihapus');
		redirect('DashboardUser');
    }
	
	// public function hapus($id_balasan){
    //     $data = array(
    //         'id_balasan'       => $id_balasan,
    //         'status'        => 0
    //     );
    //     $this->Balasan_model->delete($data);
	// 	$this->session->set_flashdata('pesan_success', 'Data balasan berhasil dihapus');
    //     redirect('DashboardUser');
    // }

	public function view_ubah($id_balasan){
        $where = array('id_balasan' => $id_balasan);
        $data['balasan'] = $this->Balasan_model -> update_balasan ($where, 'balasan') -> result();
        $this->load->view('User/headuser');
        $this->load->view('User/Balasan/update', $data);
        $this->load->view('User/footeruser');
    }

    public function update(){
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d H:i:s");

        $id_balasan	= $this->input->post('id_balasan');
		$id_komentar	= $this->input->post('id_komentar');
        $id_akun	= $this->input->post('id_akun');
        $isi_balasan  = $this->input->post('isi_balasan');

        $data = array(
		'id_balasan'   => $id_balasan,
		'id_komentar'   => $id_komentar,
 		'id_akun'      	=> $id_akun,
 		'isi_balasan' => $isi_balasan,
 		'waktu_balasan'    => $tanggal
	     );

	     $where = array(
             'id_balasan'       => $id_balasan
         );

    	$this->Balasan_model->update($where,$data,'balasan');
		$this->session->set_flashdata('pesan_success', 'Data balasan berhasil diubah');
		redirect('DashboardUser');
     }
}
?>