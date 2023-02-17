<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FORUM DISKUSI - Discuss</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/img/Logo.png'); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link href="<?= base_url('assets/css/fontgoogle.css'); ?>" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="<?= base_url('assets/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap-icons.css'); ?>" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    
    <!-- Sweet Alert -->
    <link href="<?= base_url('assets/css/sweetalert2.min.css'); ?>" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>                                          
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
 
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <img src="<?= base_url('/assets/img/Logo2.png');?>" style="width:200px; height:100px" />
                </a>
             
                <!-- <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php 
                                if ($this->session->userdata('user_profile') != null) {
                                    echo base_url('/assets/image/profile/'.$this->session->userdata('user_profile'));
                                } else {
                                    echo base_url('/assets/template/admin/images/app/avatar_default.svg');
                                }
                            ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $this->session->userdata('user_nama'); ?></h6>
                        <span><?php echo $this->session->userdata('user_role'); ?></span>
                    </div>
                </div> -->
                <div class="navbar-nav w-100">
                    <a href="<?php echo site_url('DashboardUser') ?>" class="nav-item nav-link <?php echo $this->uri->segment(1) == 'dashboarduser' ? 'active' : ''; ?>"><i class='fa fa-dashboard'></i>Join Diskusi</a>
                    <a href="<?php echo site_url('AboutUsUser') ?>" class="nav-item nav-link <?php echo $this->uri->segment(1) == 'AboutUsUser' ? 'active' : ''; ?>"><i class="fa  fa-book me-2"></i>About us</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2"  src=
                            "<?php 
                                if ($this->session->userdata('user_profile') != null) {
                                    echo base_url('/assets/image/profile/'.$this->session->userdata('user_profile'));
                                } else {
                                    echo base_url('/assets/template/admin/images/app/avatar_default.svg');
                                }
                            ?>"
                            alt="user-image" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $this->session->userdata('user_nama'); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="<?= base_url('Profile_User/index/'.$this->session->userdata('user_id')) ?>" class="dropdown-item"><i class="fa fa-user"></i> My Profile</a>
                            <a href="<?php echo site_url('Login') ?>" class="dropdown-item <?php echo $this->uri->segment(1) == 'Login' ? 'active' : ''; ?>"><i class='fa fa-sign-out'></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
         

