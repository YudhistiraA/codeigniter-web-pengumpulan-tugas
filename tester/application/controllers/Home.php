<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
  }
  public function index()
  {
  $data = array(
    'title' => 'Home',
    'isi'  => 'v_home'
  );
  $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/v_wrapper', $data,FALSE);
  }
  public function karyawan()
  {
  $data = array(
    'title' => 'Data Karyawan',
    'isi'  => 'v_karyawan'
  );
  $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/v_wrapper', $data,FALSE);
  }
  public function profile()
  {

    $data = array(

    'isi'  => 'v_profile'
  );
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/v_wrapper', $data,FALSE);
  }
  public function navbar()
  {

    $data = array(

    'isi'  => 'v_nav'
  );
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/v_wrapper', $data,FALSE);
  }
  

}
