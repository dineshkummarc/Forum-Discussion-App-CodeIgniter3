<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MasterUser extends CI_controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("akun_model");
        $this->load->library('session');
    }

    public function index()
    {
        $data["user"]=$this->akun_model->view_akun();
        $this->load->view('Admin/head');
        $this->load->view('Admin/Akun/view',$data);
        $this->load->view('Admin/footer');
    }

    public function input()
    {
        $x['idAkun']=$this->akun_model->autoId();	
        $this->load->view('Admin/head');
        $this->load->view('Admin/Akun/add',$x);
        $this->load->view('Admin/footer');
    }

    public function validate_age($tanggal_lahir)
    {
        // Mendapatkan usia dari tanggal lahir yang diberikan
        $usia = (int) floor((time() - strtotime($tanggal_lahir)) / 31556926);

        if ($usia < 17) {
            $this->form_validation->set_message('validate_age', 'Anda harus berusia di atas 17 tahun untuk mendaftar.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function tambah()
    {
        $idAkun = $this->akun_model->autoId();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|max_length[20]|is_unique[akun.username]');
        $this->form_validation->set_rules('pass', 'Password', 'required|max_length[20]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|callback_validate_age');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[akun.email]');
        $this->form_validation->set_message('is_unique', " Data %s sudah ada.");

        $this->form_validation->set_message('required', "%s tidak boleh kosong.");
        $this->form_validation->set_message('max_length[20]', '(field) maksimal hanya 20 karakter');
        $this->form_validation->set_message('valid_email', 'Format email tidak sesuai.');


        if($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->upload->initialize($config);
            $field_name = "foto_profile";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'id_akun'           => $idAkun,
                    'role'              => $this->input->post('role'),
                    'nama_user'         => $this->input->post('nama'),
                    'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                    'tgl_lahir'         => $this->input->post('tanggal_lahir'),
                    'pekerjaan'         => $this->input->post('pekerjaan'),
                    'email'             => $this->input->post('email'),
                    'username'          => $this->input->post('username'),
                    'password'          => md5($this->input->post('pass')),
                    'status'            => 1
                );
                $this->db->insert('akun' ,$data);
                $this->session->set_flashdata('pesan_success', 'Data user berhasil dibuat');
                redirect('masteruser');
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_akun'           => $idAkun,
                    'role'              => $this->input->post('role'),
                    'nama_user'         => $this->input->post('nama'),
                    'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                    'tgl_lahir'         => $this->input->post('tanggal_lahir'),
                    'pekerjaan'         => $this->input->post('pekerjaan'),
                    'email'             => $this->input->post('email'),
                    'username'          => $this->input->post('username'),
                    'password'          => md5($this->input->post('pass')),
                    'foto_profile'      => $upload_data['uploads']['file_name'],
                    'status'            => 1
                );
                $this->db->insert('akun' ,$data);
                $this->session->set_flashdata('pesan_success', 'Data user berhasil dibuat');
                redirect('masteruser');
            }
        }
        $this->session->set_flashdata('pesan_error', 'Data user gagal dibuat');
        $this->input();
    }

    public function hapus($id_akun){
        $data = array(
            'id_akun'       => $id_akun,
            'status'        => 0
        );
        $this->akun_model->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data user berhasil dihapus');
        redirect('masteruser');
    }

    public function view_detail($id_akun){
        $where = array('id_akun' => $id_akun);
        $data['user'] = $this->akun_model -> view_mdetail($where, 'akun') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/user_detail', $data);
        $this->load->view('Admin/footer');
    }

    public function view_ubah($id_akun){
        $where = array('id_akun' => $id_akun);
        $data['user'] = $this->akun_model -> view_update ($where, 'akun') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/Akun/update', $data);
        $this->load->view('Admin/footer');
    }

    public function updateAkun()
    {
        $config['upload_path'] = './assets/image/profile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->upload->initialize($config);
        $field_name = "foto_profile";

        if (!$this->upload->do_upload($field_name)) {
            echo "Foto tidak ditemukan";
        }
        else {
            $upload_data = array ('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

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
                'foto_profile'      => $upload_data['uploads']['file_name'],
                'status'            => 1
            );
            $this->akun_model->update($data);
            $this->session->set_flashdata('pesan_success', 'Data user berhasil diubah');
            redirect('masteruser');

        }
            //tanpa ganti gambar 
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
        $this->session->set_flashdata('pesan_success', 'Data user berhasil diubah');
        redirect('masteruser'); 

    }

    public function view_profil_akun($id_akun) {
        $data['user'] = $this->akun_model -> view_update ($where, 'akun') -> result();
        $this->load->view('Admin/head');
        $this->load->view('Admin/Akun/update', $data);
        $this->load->view('Admin/footer');
    }
}
?>