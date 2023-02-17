<html>
<head>
  <title>Cetak PDF</title>
  <style>
    .table {
        border-collapse:collapse;
        table-layout:fixed;width: 630px;
    }
    .table th {
        padding: 5px;
    }
    .table td {
        word-wrap:break-word;
        width: 20%;
        padding: 5px;
    }
  </style>
</head>
<body>
<div class="position-relative">
                        
                        
</div>
<h5>_________________________________________________________________________________________________________________</h5>
    <h4 style="text-align:center" >Data Laporan Forum Diskusi</h4> 
   
  <p style="text-align:center"><?php echo $label ?> </p>
  <br> <br>
  <table class="table" border="1" width="100%" style="margin-top: 10px;">
    <tr>
      <th>Tanggal</th>
      <th>Judul Topik</th>
      <th>Kategori</th>
      <th>Jumlah Komentar</th>
      <th>Jumlah Balasan</th>
    </tr>
    <?php
        if(empty($laporan)){ // Jika data tidak ada
            echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
        }else{ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
            foreach($laporan as $data){ // Looping hasil data transaksi
                $tgl = date('d-m-Y', strtotime($data->Waktu)); // Ubah format tanggal jadi dd-mm-yyyy
                echo "<tr>";
                echo "<td style='width: 100px;'>".$tgl."</td>";
                echo "<td style='width: 150px;'>".$data->Judul_Topik."</td>";
                echo "<td style='width: 150px;'>".$data->Kategori."</td>";
                echo "<td style='width: 60px;'>".$data->Jumlah_Komentar."</td>";
                echo "<td style='width: 60px;'>".$data->Jumlah_Balasan."</td>";
                echo "</tr>";
            }
        }
    ?>
  </table>
</body>
</html>