<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->session->userdata('status') == 'user_login') {
            redirect('Forbidden');
        }
    }
    function index()
    {
        $data['admin'] = $this->M_admin->get_data('admin')->result();
        $data['judul'] = 'Admin Page';
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('V_admin');
        $this->load->view('Templates/Footer');
    }
    function tambah()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => $password
        );
        $this->M_admin->insert($data, 'admin');
        $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <b>Berhasil</b> di tambah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('Admin');
    }
    function edit()
    {
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data <b>Gagal</b> di ubah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('Admin');
        } else {
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = array(
                'username' => $username,
                'password' => $password
            );
            $this->db->where('id', $id);
            $this->db->update('admin', $data);
            $this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <b>Berhasil</b> di ubah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('Admin');
        }
    }
    function delete($id)
    {
        $where = array('id' => $id);
        $this->M_admin->delete($where, 'admin');
        $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <b>Berhasil</b> di hapus
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('Admin');
    }
}
