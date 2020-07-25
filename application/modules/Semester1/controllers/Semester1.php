<?php
class Semester1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_semester1');
        $this->form_validation->set_rules('grade', 'Grade', 'required');
    }
    function index()
    {
        $data['semester1'] = $this->M_semester1->get_data('semester')->result();
        $data['course'] = $this->M_semester1->get('course')->result();
        $data['score'] = $this->M_semester1->get('score')->result();
        $data['judul'] = 'Semester Page 1';
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('V_semester1');
        $this->load->view('Templates/Footer');
    }
    function tambah()
    {
        $id_course = $this->input->post('id_course');
        $id_score = $this->input->post('id_score');
        $semester = $this->input->post('semester');
        $data = array(
            'id_course' => $id_course,
            'id_score' => $id_score,
            'semester' => $semester
        );
        $this->M_semester1->insert($data, 'semester');
        $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <b>Berhasil</b> di tambah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('Semester1');
    }
    function edit()
    {
        $id = $this->input->post('id');
        $id_course = $this->input->post('id_course');
        $id_score = $this->input->post('id_score');
        $semester = $this->input->post('semester');
        $data = array(
            'id_course' => $id_course,
            'id_score' => $id_score,
            'semester' => $semester
        );
        $this->db->where('id', $id);
        $this->db->update('semester', $data);
        redirect('Semester1');
    }
    function delete($id)
    {
        $where = array('id' => $id);
        $this->M_semester1->delete($where, 'semester');
        $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <b>Berhasil</b> di hapus
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('Semester1');
    }
}
