<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_model extends CI_Model{
    private $_table = "komentar";

    function getAll(){
        $query = $this->db->query("SELECT * from komentar where status=1");
        return $query->result();
    }

    // public function getAll1()
    // {
    //     $query =  $this->db->query("SELECT COUNT(b.id_balasan) AS Jumlah_Balasan FROM komentar k  INNER JOIN balasan AS b  ON k.id_komentar = b.id_komentar GROUP BY k.id_komentar DESC");
    //     return $query->result();
    // }

    function countKomentar(){
        $query = $this->db->query("SELECT  COUNT(*) TotalKomentar, a.id_topik FROM komentar a INNER JOIN topik b ON a.id_topik = b.id_topik ");
        return $query->result();
    }
 
    public function get_username_foto(){
        $query = $this->db->query("SELECT komentar.*, akun.username, akun.foto_profile from komentar inner join akun on akun.id_akun = komentar.id_akun WHERE id_topik=id_topik");
        return $query->result();
    }

    public function save()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d H:i:s");

        $post = $this->input->post();
        $this->id_topik = $post["id_topik"];
        $this->id_akun = $post["id_akun"];
        $this->isi_komentar = $post["isi_komentar"];
        $this->waktu_komentar = $tanggal;
        $this->status = "1";
        return $this->db->insert($this->_table, $this);
    }
    public function delete($data)
    {
        $this->db->where('id_komentar', $data['id_komentar']);
        $this->db->update('komentar', $data);
    }
    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function update_komentar($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function view_komentar($where, $table){
        return $this->db->get_where($table, $where);
    }
}
?>