<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_model extends CI_Model
{
    private $_table = "akun";

    public function view_akun()
    {
        $query = $this->db->query("SELECT * FROM akun WHERE Status = '1' order by id_akun asc");
        return $query->result();
    }

    public function jumlah_akun()
    {
        $query = $this->db->query("SELECT COUNT(id_akun) AS JumlahAkun FROM akun where status = '1' ");
        return $query->result();
    }
    
    function autoId(){
        $cd = $this->db->query("SELECT MAX(RIGHT(id_akun,3)) AS kd_max FROM akun");
        $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "USR".$kd;
    }


    public function getByUsernamePassword()
    {
        $post1 = $this->input->post();
        $username = $post1["username"];
        $password = md5($post1["pass"]);
        
        $array = array('username' => $username, 'password' => $password);
        $query = $this->db->get_where($this->_table,$array);
        return $query->row();
    }

    public function save()
    {
       
        $post = $this->input->post();
        $this->id_akun = $post["id"];
      //  $this->role = $post["role"];
        $this->nama_user = $post["nama"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tgl_lahir = $post["tglLahir"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $password = $post["pass"];
        $md5=md5($password); 
        $this->password = $md5;
        $this->foto_profile = $post["foto_profile"];
        $this->status = "1";
        return $this->db->insert($this->_table, $this);
    }

    public function view_mdetail($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function view_update($where, $table){
        return $this->db->get_where($table, $where);
    }

    //update data
    public function update($data)
    {
        $this->db->where('id_akun', $data['id_akun']);
        $this->db->update('akun', $data);
    }
    
    /*public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }*/

    public function delete($data)
    {
        $this->db->where('id_akun', $data['id_akun']);
        $this->db->update('akun', $data);
    }

    public function logout()
    {
        //hapus session
        $this->session->unset_userdata('id_akun');
        $this->session->unset_userdata('nama_akun');
        $this->session->set_flashdata('pesan_success', 'Anda Berhasil Logout');
        redirect('Login');
    }

    public function updateFoto($data)
    {

        $this->db->where('id_akun',$data['id_akun']);
        $this->db->update('akun', $data);
    }
}