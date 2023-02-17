<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewForum extends CI_Controller {

    // public function index($id_topik){
    //     $where = array('id_topik' => $id_topik);
    //     $data['topik'] = $this->Topik_model -> view_mdetail($where, 'akun') -> result();
    //     $this->load->view('Admin/head');
    //     $this->load->view('Admin/view_forum', $data);
    //     $this->load->view('Admin/footer');
    // }

    // public function tambahkomentar(){
	// 	$komentar = $this->Komentar_model;
	// 	$result =$komentar->save();
    //     redirect('view_forum');
	// }
    
    // public function view_topik($id_topik){
    //     $where = array('id_topik' => $id_topik);
    //     $data['topik'] = $this->Topik_model -> view_update ($where, 'topik') -> result();
    //     $this->load->view('Admin/head');
    //     $this->load->view('Admin/view_forum', $data);
    //     $this->load->view('Admin/footer');
    // }
}
?>