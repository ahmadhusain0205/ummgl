<?php
class Ip extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_semester1');
    }
    function index()
    {
        $data['semester1'] = $this->M_semester1->get_data('semester')->result();
        $data['ip1'] = $this->M_semester1->get_IP1('semester')->result();
        $data['judul'] = 'Ip Page';
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('Templates/HeaderIp');
        $this->load->view('V_ip', $data);
        $this->load->view('Templates/Footer');
    }
}
