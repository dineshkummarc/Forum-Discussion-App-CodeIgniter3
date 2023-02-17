<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Balasan_model extends CI_Model{
    private $_table = "balasan";

    function getBalasan(){
        $query = $this->db->query("SELECT u.id_balasan, u.id_akun, u.id_komentar, a.nama_user, a.foto_profile, u.isi_balasan, u.waktu_balasan FROM balasan u INNER JOIN akun a ON u.id_akun = a.id_akun  WHERE u.status = 1 ");
        return $query->result();
    }

    public function save()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d H:i:s");

        $post = $this->input->post();
        $this->id_komentar = $post["id_komentar"];
        $this->id_akun = $post["id_akun"];
        $this->isi_balasan = $post["isi_balasan"];
        $this->waktu_balasan = $tanggal;
        $this->status = "1";
        return $this->db->insert($this->_table, $this);
    }

    public function view_balasan($where, $table){
        return $this->db->get_where($table, $where);
    }

    //delete update status
    public function delete($data)
    {
        $this->db->where('id_balasan', $data['id_balasan']);
        $this->db->update('balasan', $data);
    }

    //delete hapus 
    public function delete2($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_balasan($where, $table){
        return $this->db->get_where($table, $where);
    }
    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
?>