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
<link href="<?= base_url()?>assets/css/sweetalert2.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative bg-white d-flex p-0">
   
    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="text-primary"></i> FORM LOGIN</h3>
                    </div>

                    <div id="flash" data-flash="<?=$this->session->flashdata('pesan_success'); ?>"></div>

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
                    <form method="POST" action="<?= base_url('login/ceklogin') ?>" autocomplete="off">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="User name">
                            <label for="floatingInput">Username</label>
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <?= form_error('pass', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>
                        <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div> -->
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="<?php echo site_url('Regis') ?>">Registrasi</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
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

<!-- Sweet Alert2 -->
<script src="<?= base_url()?>assets/js/sweetalert2.min.js"></script>
<script>
    var flash = $('#flash').data('flash');
    if(flash) {
        Swal.fire('Selamat datang di' + flash);
    }
</script>

<!-- Template Javascript -->
<script src="<?= base_url('assets/js/main.js'); ?>"></script>
</body>

</html>