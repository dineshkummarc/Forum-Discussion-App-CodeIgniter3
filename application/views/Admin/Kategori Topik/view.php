<div class="container-fluid pt-4 px-4">
<div class="card shadow mb-4">
    
    <div class="card-header py-3 " >
        <h6 class="m-0 font-weight-bold text-primary">Kategori Topik
        <span style="float: right">
        <a href="<?php echo site_url('masterkategori/input') ?>" class ="btn btn-success btn-sm float-right">Tambah Data</a>
        </span>
    </h6>
    </div>
    <div class="card-body">
        <div id="flash" data-flash="<?=$this->session->flashdata('pesan_success'); ?>"></div> 
        <?php
            if ($this->session->flashdata('pesan_error')) {
                echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo $this->session->flashdata('pesan_error');
                echo '</div>';
            }
        ?>
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" id="datatables">
                <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Id Kategori</th>
                            <th class="text-center">Nama Akun</th>
                            <th class="text-center">Nama Kategori</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center"></th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($kategori as $k) { ?>
                            <tr>
                                <td>
                                    <?php $i++; ?>
                                    <?php echo $i ?>
                                </td>
                                <td><?php echo $k->id_kategori ?></td>
                                <td><?php echo $k->nama_user ?></td>
                                <td><?php echo $k->nama_kategori ?></td>
                                <td><?php echo $k->keterangan ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('masterkategori/view_ubah/'.$k->id_kategori) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>                                    
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('masterkategori/hapus/'.$k->id_kategori) ?>" class="btn btn-danger btn-sm" id="tombol-hapus">
                                        <i class="fa fa-trash"></i> 
                                    </a>
                                </td>
                            </tr>
                        <?php 
                        } ?>
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
</div>


