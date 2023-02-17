<!DOCTYPE html>
<html>
    <head>
    <title></title>
    </head>

<body>
<div class="container-fluid pt-4 px-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3 " >
            <h6 class="m-0 font-weight-bold text-primary">Laporan Forum Diskusi
            <span style="float: right">  </span>
            </h6>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" id="tableData">
                        <div class="row">
                        <form action="<?php echo base_url('Laporan/index')?>" method="get"> 
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="startDate">Pilih dari Tanggal</label>
                                    <input id="inputMulaiTanggal" name="startDate" value="<?= @$_GET['startDate']?>" class="form-control " type="date" 
                                    placeholder="Start Date"/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="startDate">Sampai Tanggal</label>
                                    <input id="inputSampaiTanggal" name="endDate" value="<?= @$_GET['endDate']?>" class="form-control " type="date" placeholder="End Date"/>
                                    <!-- <button type="submit" class="btn btn-primary"> Cari</button> -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <br>
                            <button type="submit" name="filter" value="true" class="btn btn-primary">Tampilkan</button>  <?php
                            if(isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                                echo '<a href="'.base_url('Laporan').'" class="btn btn-danger">RESET</a>'; ?>
                            </div>
                        </form>
                        </div>
                        <br>
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Judul Topik</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Jumlah Komentar</th>
                                <th class="text-center">Jumlah Balasan</th>
                                <th class="text-center">Waktu</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                <?php foreach ($laporan as $k) { ?>
                                <tr>
                                    <td>
                                        <?php $i++; ?>
                                        <?php echo $i ?>
                                    </td>
                                <td class="text-center"><?php echo $k->Judul_Topik ?></td>
                                <td class="text-center"><?php echo $k->Kategori ?></td>
                                <td class="text-center"><?php echo $k->Jumlah_Komentar ?></td>
                                <td class="text-center"><?php echo $k->Jumlah_Balasan ?></td>
                                <td class="text-center"><?php echo $k->Waktu ?></td>
                                
                                </tr>
                                <?php 
                                } ?>
                            </tbody>
                    </table>
                </div>
                <br>
                <span style="float:right">
                        <a href="<?php echo $url_cetak ?>" class="btn btn-warning"><i class="fa fa-file-pdf-o">CETAK PDF</a></i><br>
                    </span>
                </div>
            </div>  
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        setDateRangePicker(".startDate", ".endDate")
    })
</script>
</body>
</html>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
