<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_admin extends CI_Controller{
    public function index()
    {
        $this->load->view('admin/dashboard_admin');
    }
}