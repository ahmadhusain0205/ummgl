<?php
class Edit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_edit');
    }
    function index()
    {
        $data['judul'] = 'Edit Page';
        if ($this->session->userdata('status') == 'admin_login') {
            $data['user'] = $this->M_edit->get_data('admin')->result();
        } else {
            $data['user'] = $this->M_edit->get_data('user')->result();
        }
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('V_Edit');
        $this->load->view('Templates/Footer');
    }
    function ubah()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => $password
        );
        $where = array('id' => $id);
        if ($this->session->userdata('status') == 'admin_login') {
            $this->M_edit->update($where, $data, 'admin');
        } else {
            $this->M_edit->update($where, $data, 'user');
        }
        redirect('Edit');
    }
}
