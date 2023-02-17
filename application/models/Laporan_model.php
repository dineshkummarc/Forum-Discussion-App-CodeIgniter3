<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model{
      public function getAll()
      {
            $query = $this->db->get('view_laporandiskusi') ;
            return $query->result();

      }

      public function getFilter($start, $end )
      {
            $this->db->where('Waktu >=', $start);
            $this->db->where('Waktu <=', $end);
            $query = $this->db->query('SELECT * FROM view_laporandiskusi') ;
            $query = $this->db->get('view_laporandiskusi') ;
            return $query->result();
      }

      public function view_by_date($start, $end){
            $start = $this->db->escape($start);
            $end = $this->db->escape($end);
            $this->db->where('DATE(Waktu) BETWEEN '.$start.' AND '.$end); // Tambahkan where tanggal nya
            return $this->db->get('view_laporandiskusi')->result();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
      }

}
?>