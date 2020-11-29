<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('taskmodel');
    if (!$this->session->userdata('email')){
      redirect('auth');
  }
}
  public function index()
       {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['task'] =$this->db->get_where('project', ['status' =>
        'implemented'])->result();
        $data['project'] = $this->taskmodel->countAllProject('project');
        $data['karyawan'] = $this->taskmodel->countAllUser('user');
        $data['reviewed'] = $this->taskmodel->countAll();
           $this->load->view('templates/header', $data);
           $this->load->view('templates/sidebar');
           $this->load->view('templates/topbar');
           $this->load->view('user/index', $data);
           $this->load->view('templates/footer');
       }


}
