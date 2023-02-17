<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model("akun_model");
		$this->load->library('session');
	}
    
    public function index($user_id){
        $where = array('id_akun' => $user_id);
        $data['user'] = $this->akun_model -> view_mdetail($where, 'akun') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/profile', $data);
        $this->load->view('Admin/footer');
    }

    public function UpdateAkun()
    {
        $id = $this->input->post('id_akun');
        $data = array(
            'id_akun'           => $this->input->post('id_akun'),
            'role'              => $this->input->post('role'),
            'nama_user'         => $this->input->post('nama_user'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'tgl_lahir'         => $this->input->post('tanggal_lahir'),
            'pekerjaan'         => $this->input->post('pekerjaan'),
            'email'             => $this->input->post('email'),
            'username'          => $this->input->post('username'),
            'password'          => md5($this->input->post('password')),
            'status'            => 1
        );
        $this->akun_model->update($data);
        $this->session->set_flashdata('pesan_success', 'Data profile berhasil diubah');
        $id = $id;
        redirect('Profile/index/'.$id);
    }
    
    public function update_foto()
    {
        $id = $this->input->post('id_akun');
        // load library form_validation
        $config['upload_path'] = './assets/image/profile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;

        // load upload library
        $this->upload->initialize($config);

        $field_name = "foto_profile";
        if (!$this->upload->do_upload($field_name)) {
            // if photo upload fails, show error message
            $this->session->set_flashdata('pesan_error', $this->upload->display_errors());
            $id = $id;
            redirect('Profile/index/'.$id);
        } else {

            $upload_data = array ('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);
            $upload_data = array ('uploads' => $this->upload->data());

            // set data for photo update
            $data = array(
                'id_akun'           =>$this->input->post('id_akun'),
                'foto_profile' => $upload_data['uploads']['file_name'],
            );

            // perform photo update using model
            $this->akun_model->updateFoto($data);

            // show success message
            $this->session->set_flashdata('pesan_success', ' Data profile berhasil diubah');
            $id = $id;
            redirect('Profile/index/'.$id);
        }
        $id = $id;
        redirect('Profile/index/'.$id);
    }

}
?>