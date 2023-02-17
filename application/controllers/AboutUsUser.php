<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUsUser extends CI_Controller {

    public function index()
    {
        $this->load->view('User/headuser');
        $this->load->view('User/about_us');
        $this->load->view('User/footeruser');
    }
}
?>