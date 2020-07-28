<?php
class Semester5 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_semester5');
        $this->form_validation->set_rules('grade', 'Grade', 'required');
    }
    function index()
    {
        $data['semester5'] = $this->M_semester5->get_data('semester')->result();
        $data['course'] = $this->M_semester5->get('course')->result();
        $data['score'] = $this->M_semester5->get('score')->result();
        $data['judul'] = 'Semester Page 5';
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('V_semester5');
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
        $this->M_semester5->insert($data, 'semester');
        $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <b>Berhasil</b> di tambah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        if ($this->input->post('semester') == '5') {
            redirect('Semester5');
        } else if ($this->input->post('semester') == '4') {
            redirect('Semester4');
        } else if ($this->input->post('semester') == '3') {
            redirect('Semester3');
        } else if ($this->input->post('semester') == '2') {
            redirect('Semester2');
        } else {
            redirect('Semester1');
        }
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
        if ($this->input->post('semester') == '5') {
            redirect('Semester5');
        } else if ($this->input->post('semester') == '4') {
            redirect('Semester4');
        } else if ($this->input->post('semester') == '3') {
            redirect('Semester3');
        } else if ($this->input->post('semester') == '2') {
            redirect('Semester2');
        } else {
            redirect('Semester1');
        }
    }
    function delete($id)
    {
        $where = array('id' => $id);
        $this->M_semester5->delete($where, 'semester');
        $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data <b>Berhasil</b> di hapus
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('Semester5');
    }
}
