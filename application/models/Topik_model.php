<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Topik_model extends CI_Model{
    //AUTOID
    private $_table = "topik";

    // public function getAll()
    // {
    //     $query =  $this->db->query("SELECT t.id_topik,c.nama_kategori, a.id_akun, a.nama_user, t.judul_topik, t.isi_topik, t.waktu_topik,COUNT(k.id_komentar) AS Jumlah_Komentar FROM topik t INNER JOIN kategori c ON t.id_kategori = c.id_kategori INNER JOIN akun a  ON t.id_akun = a.id_akun LEFT JOIN komentar AS k USING(id_topik) WHERE t.status = '1' GROUP BY t.id_topik DESC");
    //     SELECT t.id_topik,c.nama_kategori, a.id_akun, a.nama_user, t.judul_topik, t.isi_topik, t.waktu_topik,COUNT(k.id_komentar) AS Jumlah_Komentar,COUNT(b.id_balasan) AS Jumlah_Balasan FROM topik t INNER JOIN kategori c ON t.id_kategori = c.id_kategori INNER JOIN akun a  ON t.id_akun = a.id_akun LEFT JOIN komentar AS k USING(id_topik) LEFT JOIN balasan AS b USING(id_komentar) WHERE t.status = '1' GROUP BY t.id_topik DESC
    // }

    public function getAll(){
    $query = $this->db->query("SELECT t.id_topik,c.nama_kategori, a.id_akun, a.nama_user, t.judul_topik, t.isi_topik, t.waktu_topik,COUNT(k.id_komentar) AS Jumlah_Komentar,COUNT(b.id_balasan) AS Jumlah_Balasan FROM topik t INNER JOIN kategori c ON t.id_kategori = c.id_kategori INNER JOIN akun a  ON t.id_akun = a.id_akun LEFT JOIN komentar AS k USING(id_topik) LEFT JOIN balasan AS b USING(id_komentar) WHERE t.status = '1' GROUP BY t.id_topik DESC");
    return $query->result();
    }

    // public function getAll1()
    // {
    //     $query =  $this->db->query("SELECT t.id_topik,c.nama_kategori, a.id_akun, a.nama_user, t.judul_topik, t.isi_topik, t.waktu_topik,COUNT(b.id_balasan) AS Jumlah_Balasan FROM topik t INNER JOIN kategori c ON t.id_kategori = c.id_kategori INNER JOIN akun a  ON t.id_akun = a.id_akun  LEFT JOIN balasan AS b USING(id_komentar) WHERE t.status = '1' GROUP BY t.id_topik DESC");
    //     return $query->result();
    // }

    public function jumlah_topik()
    {
        $query =  $this->db->query(" SELECT COUNT(id_topik) AS JumlahTopik FROM Topik where status = '1'");
        return $query->result();
      
    }
   

    public function autoId(){
        $cd = $this->db->query("SELECT MAX(RIGHT(id_topik,3)) AS kd_max FROM topik");
        $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "TPK".$kd;
    }
    function get_topik(){
        $query = $this->db->query("SELECT * from kategori where status = 1 order BY nama_kategori ASC");
        return $query->result();
    }

    public function delete($data)
    {
        $this->db->where('id_topik', $data['id_topik']);
        $this->db->update('topik', $data);
    }
    
    public function save()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d H:i:s");

        $post = $this->input->post();
        $this->id_topik = $post["id_topik"];
        $this->id_akun = $post["id_akun"];
        $this->id_kategori = $post["id_kategori"];
        $this->judul_topik = $post["judul_topik"];
        $this->isi_topik = $post["isi_topik"];
        $this->waktu_topik = $tanggal;
        $this->status = "1";
        return $this->db->insert($this->_table, $this);
    }

    public function view_update($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function view_update2($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function add($data)
    {
        $this->db->insert('topik', $data);
    }

    public function edit($data)
    {
        $this->db->where('Id_Topik', $data['Id_Topik']);
        $this->db->update('topik', $data);
    }
    
 
}
?>