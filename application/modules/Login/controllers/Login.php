<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('form_validation');
    }
    function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $data['judul'] = 'Login Page';
        $this->load->view('Templates/Header_login', $data);
        $this->load->view('V_login');
        $this->load->view('Templates/Footer_login');
    }
    function login_aksi()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data_session = array(
            'username' => $username,
            'password' => $password
        );
        $this->session->set_userdata($data_session);
        if ($this->form_validation->run() == false) {
            redirect('Login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'password' => $password
            );
            $this->M_login->login('user', $where)->num_rows();
            $this->session->set_userdata($where);
            redirect('Dashboard');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Login?alert=logout');
    }
}
