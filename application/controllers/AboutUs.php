<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {

    public function index()
    {
        $this->load->view('Admin/head');
        $this->load->view('Admin/about_us');
        $this->load->view('Admin/footer');
    }
}
?>