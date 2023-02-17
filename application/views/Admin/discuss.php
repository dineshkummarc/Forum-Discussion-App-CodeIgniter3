<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4"> 
    <div id="flash" data-flash="<?=$this->session->flashdata('pesan_success'); ?>"></div>
    <div id="flash_error" data-flash="<?=$this->session->flashdata('pesan_error'); ?>"></div>
    <?php
        if ($this->session->flashdata('pesan_error')) {
            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo $this->session->flashdata('pesan_error');
            echo '</div>';
        }
        // if ($this->session->flashdata('pesan_success')) {
        //     echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        //             <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
        //     echo $this->session->flashdata('pesan_success');
        //     echo '</div>';
        // }
    ?>
    <div class="row g-4">
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user-plus  fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total User</p>
                    <?php foreach ($user as $u) { ?>
                    <h6 class="mb-0"> <?php echo $u->JumlahAkun ?></h6>
                    <?php 
                    } ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-tags fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Kategori</p>
                    <?php foreach ($kategori as $k) { ?>
                    <h6 class="mb-0"><?php echo $k->JumlahKategori ?></h6>
                    <?php 
                    } ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-comments fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Topik</p>
                    <?php foreach ($topik as $t) { ?>
                    <h6 class="mb-0"><?php echo $t->JumlahTopik ?></h6>
                    <?php 
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
