<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>FORUM DISKUSI - Discuss</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicon -->
<link href="<?= base_url('assets/img/favicon.ico'); ?>" rel="icon">

<!-- Google Web Fonts -->
<link href="<?= base_url('assets/css/fontgoogle.css'); ?>" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="<?= base_url('assets/css/all.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url('assets/css/bootstrap-icons.css'); ?>" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

<!-- Sweet Alert -->
<link href="<?= base_url('assets/css/sweetalert2.min.css'); ?>" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    
    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-8">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="text-primary"></i>Registrasi</h3>    
                    </div>
                    <?php
                        // if ($this->session->flashdata('pesan_error')) {
                        //     echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        //             <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                        //     echo $this->session->flashdata('pesan_error');
                        //     echo '</div>';
                        // }
                        // if ($this->session->flashdata('pesan_success')) {
                        //     echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                        //             <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                        //     echo $this->session->flashdata('pesan_success');
                        //     echo '</div>';
                        // }
                    ?>

                    <div id="flash" data-flash="<?=$this->session->flashdata('pesan_success'); ?>"></div>
                    
                    <form role="form" action="<?php echo site_url('Regis/insert/')?>" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="p-sm-3">
                                    <div class="row">
                                    <input class="form-control" name="id" value="" hidden >
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Username<span style="color: red">*</span></label>
                                                <input type="text" class="form-control mb-3" name="username" value="<?= set_value('username')?>">
                                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>')?>  
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Password<span style="color: red">*</span></label>
                                                <div class="input-group input-group-merge mb-3">
                                                    <input type="password" class="form-control" name="password" value="<?= set_value('password') ?>"> 
                                                </div>
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>')?> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Nama Lengkap<span style="color: red">*</span></label>
                                        <input type="text" class="form-control mb-3" name="nama" value="<?= set_value('nama') ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>')?>  
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Jenis Kelamin<span style="color: red">*</span></label>
                                                    <div class="row mt-2 mb-3">
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input type="radio" name="jenis_kelamin" value="L" class="form-check-input">
                                                                <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-check">
                                                                <input type="radio" name="jenis_kelamin" value="P" class="form-check-input">
                                                                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>')?>  
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Tanggal Lahir<span style="color: red">*</span></label>
                                                <input class="form-control mb-3" type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
                                                <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>')?>  
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Pekerjaan<span style="color: red">*</span></label>
                                                <input type="text" class="form-control mb-3" name="pekerjaan" value="<?= set_value('pekerjaan') ?>">
                                                <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>')?>  
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Email<span style="color: red">*</span></label>
                                                <input type="text" class="form-control mb-3" name="email" value="<?= set_value('email') ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>')?>  
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Foto<span style="color: red">*</span></label>
                                        <input type="file" name="foto_profile" class="form-control mb-3" id="preview_gambar">
                                    </div>

                                    <div class="col-lg-12 text-center mt-4 mb-4">
                                        <img src="<?= base_url('assets/template/admin/images/app/avatar_default.svg')?>" id="gambar_load" width="150px" height="100px">
                                    </div>

                                    <div class="mt-4 mb-0">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit"> Daftar </button>
                                        <a href="<?= base_url('Login')?>" class="btn btn-outline-primary w-100 waves-effect waves-light mt-2"> Sudah Punya Akun </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Libraries -->
<script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/lib/chart/chart.min.js'); ?>"></script>
<script src="<?= base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
<script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/lib/tempusdominus/js/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
<script src="<?= base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<script src="<?= base_url('assets/lib/easing/easing.min.js'); ?>"></script>

<script src="<?= base_url('assets/template/admin/js/vendor.min.js'); ?>"></script>
<script src="<?= base_url('assets/template/admin/js/app.min.js'); ?>"></script>

<!-- Sweet Alert2 -->
<script src="<?= base_url('assets/js/sweetalert2.min.js'); ?>"></script>

<script>
    var flash = $('#flash').data('flash');
    if(flash) {
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Data user berhasil ' + flash
        })
    }
</script>

<script>
    document.getElementsByName('tanggal_lahir')[0].addEventListener('change', function() {
        var today = new Date();
        var minimumAge = 17;
        var inputDate = new Date(this.value);
        var age = (today.getFullYear() - inputDate.getFullYear()) - (today.getMonth() < inputDate.getMonth() || (today.getMonth() == inputDate.getMonth() && today.getDate() < inputDate.getDate()) ? 1 : 0);

        if (age < minimumAge) {
          alert('Tanggal lahir tidak boleh kurang dari 17 tahun');
          this.value = '';
      }
  });   
</script>

<!-- Template Javascript -->
<script src="<?= base_url('assets/js/main.js'); ?>"></script>
<script>
        // untuk cek/preview gambar
        function bacaGambar(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#gambar_load').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#preview_gambar").change(function(){
            bacaGambar(this);
        });
    </script>
     <!--Read File Data and Generate Preview using JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>

</html>