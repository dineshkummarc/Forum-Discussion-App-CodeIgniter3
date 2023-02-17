<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    
    public function index()
    {
    //     $startDate = $this->input->get('startDate', TRUE);
    //     $endDate = $this->input->get('endDate', TRUE);
    //    //die($startDate."===".$endDate);
    //     $data["laporan"]=$this->Laporan_model->getAll();
    //     $data["laporan"]=$this->Laporan_model->getFilter($startDate, $endDate);
       
    //     $this->load->view('Admin/head');
    //     $this->load->view('Admin/laporan', $data);
    //     $this->load->view('Admin/footer');


        $startDate = $this->input->get('startDate'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $endDate = $this->input->get('endDate'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        if(empty($startDate) or empty($endDate)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $laporan = $this->Laporan_model->getAll();  // Panggil fungsi view_all yang ada di TransaksiModel
            $url_cetak = 'Laporan/cetak';
            $label = 'Semua Data Transaksi';
        }else{ // Jika terisi
            $laporan = $this->Laporan_model->view_by_date($startDate, $endDate);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $url_cetak = 'Laporan/cetak?startDate='.$startDate.'&endDate='.$endDate;
            $startDate = date('d-m-Y', strtotime($startDate)); // Ubah format tanggal jadi dd-mm-yyyy
            $endDate = date('d-m-Y', strtotime($endDate)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal '.$startDate.' s/d '.$endDate;
        }
         $data['laporan'] = $laporan;
        $data['url_cetak'] = base_url('index.php/'.$url_cetak);
        $data['label'] = $label;
        
             $this->load->view('Admin/head');
            $this->load->view('Admin/laporan', $data);
             $this->load->view('Admin/footer');
    }


    public function cetak(){
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $startDate = $this->input->get('startDate'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $endDate = $this->input->get('endDate'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        if(empty($startDate) or empty($endDate)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $laporan = $this->Laporan_model->getAll();  // Panggil fungsi view_all yang ada di TransaksiModel
            $url_cetak = 'laporan/cetak';
            $label = 'Semua Data Forum Diskusi';
        }else{ // Jika terisi
            $laporan = $this->Laporan_model->view_by_date($startDate, $endDate);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $url_cetak = 'laporan/cetak?startDate='.$startDate.'&endDate='.$endDate;
            $startDate = date('d-m-Y', strtotime($startDate)); // Ubah format tanggal jadi dd-mm-yyyy
            $endDate = date('d-m-Y', strtotime($endDate)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal '.$startDate.' s/d '.$endDate;
        }
         $data['laporan'] = $laporan;
         $data['url_cetak'] = base_url('index.php/'.$url_cetak);
         $data['label'] = $label;
        ob_start();
        $this->load->view('Admin/print', $data);
        $html = ob_get_contents();
            ob_end_clean();
        require './assets/libraries/html2pdf/autoload.php'; // Load plugin html2pdfnya
        $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');  // Settingan PDFnya
        $pdf->WriteHTML($html);
        
        $pdf->Output('Data Laporan Forum Diskusi.pdf', 'D');
      }


    public function __construct(){
		parent::__construct();
		//$this->load->library('pdf');
		$this->load->model("Laporan_model");
		$this->load->library('session');
	}

    /*
    public function pdf(){
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR TOPIK FORUM DISKUSI',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(15,6,'No',1,0,'C');
        $pdf->Cell(55,6,'Judul Topik',1,0,'C');
        $pdf->Cell(40,6,'Kategori',1,0,'C');
        $pdf->Cell(40,6,'Jumlah Komentar',1,0,'C');
		$pdf->Cell(40,6,'Jumlah Balasan',1,0,'C');
        $pdf->Cell(50,6,'Waktu',1,1,'C');
        $pdf->SetFont('Arial','',10);
       $laporan = $this->Laporan_model->getAll();
        $no=0;
        foreach ($laporan as $data){
            $no++;
            $pdf->Cell(15,6,$no,1,0, 'C');
            $pdf->Cell(55,6,$data->Judul_Topik,1,0);
            $pdf->Cell(40,6,$data->Kategori,1,0);
            $pdf->Cell(40,6,$data->Jumlah_Komentar,1,0);
			$pdf->Cell(40,6,$data->Jumlah_Balasan,1,0);
            $pdf->Cell(50,6,$data->Waktu,1,1);
        }
        $pdf->Output();
	} */

}
?>