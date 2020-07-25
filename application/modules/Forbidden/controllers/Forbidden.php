<?php
class Forbidden extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = '404 Page';
        $this->load->view('Templates/Header_login', $data);
        $this->load->view('V_forbidden');
        $this->load->view('Templates/Footer_login');
    }
}
