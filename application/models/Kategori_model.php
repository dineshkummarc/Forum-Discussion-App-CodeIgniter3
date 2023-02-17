<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "kategori";

    public function getAll()
    {
        $query =  $this->db->query("SELECT u.id_kategori, c.nama_user, u.nama_kategori, u.keterangan FROM kategori u inner join akun c WHERE u.id_akun = c.id_akun AND u.status = 1");
        return $query->result();
      
    }
    function autoId(){
        $cd = $this->db->query("SELECT MAX(RIGHT(id_kategori,3)) AS kd_max FROM kategori");
        $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "KTG".$kd;
    }

    public function jumlah_kategori()
    {
        $query =  $this->db->query(" SELECT COUNT(id_kategori) AS JumlahKategori FROM kategori where status = '1'");
        return $query->result();
      
    }
   
  
    public function save()
    {
        $post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->id_akun = $post["id_akun"];
        $this->nama_kategori = $post["nama_kategori"];
        $this->keterangan = $post["keterangan"];
        $this->status = "1";
        return $this->db->insert($this->_table, $this);
    }
    public function view_update($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}