<div class="container-fluid pt-4 px-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna
            <span style="float: right">
            <a href="<?php echo site_url('masteruser/input') ?>" class ="btn btn-success btn-sm float-right">Tambah Data</a>
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
                <table class = "table table-bordered table-hover table-striped" id="datatables">
                    <thead>
                            <tr>
                                <th>No.</th>
                                <th>Id User</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            <?php foreach ($user as $u) { ?>
                                <tr>
                                    <td>
                                        <?php $i++; ?>
                                        <?php echo $i ?>
                                    </td>
                                    <td><?php echo $u->id_akun ?></td>
                                    <td><?php echo $u->nama_user ?></td>     
                                    <td>
                                        <?php if($u->role == "User" || $u->role == "user") { 
                                            echo '<span class="badge bg-success">user</span>';
                                        } else if($u->role == "Admin" || $u->role == "admin") { 
                                            echo '<span class="badge bg-primary">admin</span>';
                                        } ?>
                                    </td>
                                    <td><?php echo $u->email ?></td>

                                    <td class="text-center">
                                        <a href="<?= base_url('masteruser/view_detail/'.$u->id_akun) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="<?= base_url('masteruser/view_ubah/'.$u->id_akun) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url('masteruser/hapus/'.$u->id_akun) ?>" class="btn btn-danger btn-sm" id="tombol-hapus">   
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
