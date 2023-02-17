<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Akun_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function ceklogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        $this->form_validation->set_message('required', "%s tidak boleh kosong.");
   
        if($this->form_validation->run() == TRUE) {
            
            $post = $this->input->post();
            if (isset($post["username"]) && isset($post["pass"]))
            {
                // cek user
                $user = $this->Akun_model;
                $data = $user->getByUsernamePassword();

                if ($data != null)
                {
                    $id_akun = $data->id_akun;
                    $username = $data->username;
                    $nama = $data->nama_user;
                    $role = $data->role;
                    $password = $data->password;
                    $foto_profile = $data->foto_profile;

                    //adding data to session
                    $newdata = array(
                        'user_id' => $id_akun,
                        'user_username' => $username,
                        'user_nama' => $nama,
                        'user_role' => $role,
                        'user_profile' => $foto_profile,
                    );
                    $this->session->set_userdata($newdata);


                    if ($role == "admin" || $role == "Admin")
                    {
                        $this->session->set_flashdata('pesan_success', 'Selamat Datang di Discuss !');
                        redirect(base_url('discuss'));
                    }
                    else if($role == "user" || $role == "User") {
                       $this->session->set_flashdata('pesan_success', 'Selamat Datang di Discuss !');
                        redirect(base_url('dashboarduser'));
                    }
                }
                else {
                    $this->session->set_flashdata('pesan_error', 'Username atau Password tidak terdaftar!');
                    redirect('login');
                }
            }
            else {
                $this->session->set_flashdata('pesan_error', 'Username atau Password tidak terdaftar!');
                $this->load->view("login");
            }
        }
        $this->load->view('login', FALSE);            
    }

    public function Logout()
    {
        
        if (isset($_COOKIE["username"]) AND isset($_COOKIE["pass"])){
            setcookie("username",  '', time() - (3600));
        }
        $this->load->view('login');
    
    }
}
?>