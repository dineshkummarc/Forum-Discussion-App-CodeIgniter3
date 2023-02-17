<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("akun_model");      
    }

    public function index()
    {
        $x['idAkun']=$this->akun_model->autoId();
        $this->load->view('registrasi',$x);
    }
    
    public function insert()
    {
        $idAkun = $this->akun_model->autoId();

        $this->form_validation->set_rules('username', 'Username', 'required|max_length[20]|is_unique[akun.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $this->form_validation->set_message('required', "%s tidak boleh kosong.");
        $this->form_validation->set_message('max_length[20]', '(field) maksimal hanya 20 karakter');
        $this->form_validation->set_message('valid_email', 'Format email tidak sesuai.');

        if($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            
            $this->upload->initialize($config);
            $field_name = "foto_profile";

            if (!$this->upload->do_upload($field_name)) {
                //tanpa ada gambar
                $data = array(
                    'id_akun'           => $idAkun,
                    'role'              => 'User',
                    'nama_user'         => $this->input->post('nama'),
                    'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                    'tgl_lahir'         => $this->input->post('tanggal_lahir'),
                    'pekerjaan'         => $this->input->post('pekerjaan'),
                    'email'             => $this->input->post('email'),
                    'username'          => $this->input->post('username'),
                    'password'          => md5($this->input->post('password')),
                    'status'            => 1
                );
                $this->db->insert('akun' ,$data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil dibuat');
                redirect('regis');
            }
            else {
            $upload_data = array ('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

                $data = array(
                'id_akun'           => $idAkun,
                'role'              => 'User',
                'nama_user'         => $this->input->post('nama'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                'tgl_lahir'         => $this->input->post('tanggal_lahir'),
                'pekerjaan'         => $this->input->post('pekerjaan'),
                'email'             => $this->input->post('email'),
                'username'          => $this->input->post('username'),
                'password'          => md5($this->input->post('password')),
                'foto_profile'      => $upload_data['uploads']['file_name'],
                'status'            => 1
            );
            $this->db->insert('akun' ,$data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil dibuat');
            redirect('regis');
            }
        }
        $this->load->view('registrasi', FALSE);        
    }
}
?>