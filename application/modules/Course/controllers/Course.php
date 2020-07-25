<?php
class Course extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_course');
        $this->form_validation->set_rules('course', 'Course', 'required|trim');
        $this->form_validation->set_rules('sks', 'SKS', 'required');
    }
    function index()
    {
        $data['course'] = $this->M_course->get_data('course')->result();
        $data['judul'] = 'Course Page';
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('V_course');
        $this->load->view('Templates/Footer');
    }
    function tambah()
    {
        $course = $this->input->post('course');
        $sks = $this->input->post('sks');
        $data = array(
            'course' => $course,
            'sks' => $sks
        );
        $this->M_course->insert($data, 'course');
        $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <b>Berhasil</b> di tambah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('course');
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
            redirect('course');
        } else {
            $id = $this->input->post('id');
            $course = $this->input->post('course');
            $sks = $this->input->post('sks');
            $data = array(
                'course' => $course,
                'sks' => $sks
            );
            $this->db->where('id', $id);
            $this->db->update('course', $data);
            $this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <b>Berhasil</b> di ubah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('course');
        }
    }
    function delete($id)
    {
        $where = array('id' => $id);
        $this->M_course->delete($where, 'course');
        $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <b>Berhasil</b> di hapus
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('course');
    }
}
