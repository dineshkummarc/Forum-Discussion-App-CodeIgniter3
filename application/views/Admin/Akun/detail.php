<div class="main-content" id="panel">
    <div class="container-fluid mt-3">
        <?php foreach($user as $u) { ?>
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                    <h2>Detail Akun</h2>
                    </div>
                    <div class="col-auto">
                        <div class="text-lg-end my-1 my-lg-0">
                        <a href="<?php echo base_url('masteruser') ?>" class="btn btn-info btn-sm"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="card d-block">
                    <div class="card-body">
                    
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Nama Akun</p>
                                <div class="d-flex align-items-start">
                                    <i class="mdi mdi-account-outline font-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h6 class="mt-1 font-size-14">
                                        <?php echo $u->nama_user ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Role</p>
                                <div class="d-flex align-items-start">
                                    <i class="mdi font-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h6 class="mt-1 font-size-12">
                                            <?php if($u->role == "User" || $u->role == "user") { 
                                                echo '<span class="badge bg-success">user</span>';
                                            } else if($u->role == "Admin" || $u->role == "admin") { 
                                                echo '<span class="badge bg-primary">admin</span>';
                                            } ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Jenis Kelamin</p>
                                <div class="d-flex align-items-start">
                                    <i class="mdi mdi-gender-male-female font-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h6 class="mt-1 font-size-12">
                                            <?php if ($u->jenis_kelamin == 'L') {echo 'Laki-Laki';} ?>
                                            <?php if ($u->jenis_kelamin == 'P') {echo 'Perempuan';} ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Email</p>
                                <div class="d-flex align-items-start">
                                    <i class="mdi mdi-email-outline font-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h6>
                                            <?= $u->email ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Pekerjaan</p>
                                <div class="d-flex align-items-start">
                                    <i class="mdi mdi-account-question-outline font-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h6 class="mt-1 font-size-12">
                                            <?php echo $u->pekerjaan ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Tanggal Lahir</p>
                                <div class="d-flex align-items-start">
                                    <i class="mdi mdi-calendar-month-outline font-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h6 class="mt-1 font-size-12">
                                            <?= $u->tgl_lahir ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Username</p>
                                <div class="d-flex align-items-start">
                                    <i class="mdi mdi-account-outline font-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h6 class="mt-1 font-size-12">   
                                            <?= $u->username ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <p class="mt-2 mb-1 text-muted">Password</p>
                                <div class="d-flex align-items-start">
                                    <i class="mdi mdi-key font-18 text-success me-1"></i>
                                    <div class="w-100">
                                        <h6 class="mt-1 font-size-12">
                                            <?= $u->password ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="<?php 
                        if($u->foto_profile == null){
                            echo base_url('assets/template/admin/images/app/avatar_default.svg');
                        } else {
                            echo base_url('assets/image/profile/'.$u->foto_profile);
                        }
                        
                        ?>" id="gambar_load" width="240px" height="240px">
                    </div>
                </div>
                <?php } ?> 
            </div>
        </div>
    </div>
</div>                  
        
        
        