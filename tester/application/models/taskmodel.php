<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class taskmodel extends CI_Model{

    // GET ALL PRODUCT
    public function view(){
      return $this->db->get('project')->result();
    }

    public function view_by($id){
      $this->db->where('id', $id);
      return $this->db->get('project')->row();
    }
    public function view_porto($email){
      $this->db->where('email', $email);
      return $this->db->get('portofolio')->result();
    }
    public function countAllProject($table)
      {
        $this->db->where('status','implemented');
        return $this->db->count_all_results('project');
      }

      public function countAll()
      {
        $this->db->where('status','reviewed');
        return $this->db->count_all_results('project');
      }

      public function countAllUser($table)
        {
          $this->db->from('user');
          return $this->db->count_all_results();
        }
    public function view_project($nama){
      $this->db->where('nama_project', $nama);
      return $this->db->get('portofolio')->result();
    }

    public function karyawan($id){
      $this->db->where('id_karyawan', $id);
      return $this->db->get('portofolio')->result();
    }

    public function save(){
      $data = [

        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'deskripsi_project' => ($this->input->post('deskripsi_project')),
        'status' => ($this->input->post('status')),
        'date_created' =>  Date($this->input->post('date_created')),
        'deathline' =>   Date($this->input->post('deathline'))
      ];

      $this->db->insert('project', $data);
    }

    public function hapusData($id){
      $this->db->where('id', $id);
      $this->db->delete('project'); // Untuk mengeksekusi perintah delete data
    }
    public function hapusDataPortofolio($nik){
      $this->db->where('id', $nik);
      $this->db->delete('portofolio'); // Untuk mengeksekusi perintah delete data
    }
    public function update($nis){
      $data = array(

        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'deskripsi_project' => ($this->input->post('deskripsi_project')),
        'status' => $this->input->post('status'),
        'date_created' => Date($this->input->post('date_created')),
        'deathline' =>Date($this->input->post('deathline'))
      );

      $this->db->where('id', $nis);
      $this->db->update('project', $data); // Untuk mengeksekusi perintah update data

    }

    public function getemail()
    {
      $this->db->select('email');
      return $this->db->get('user')->result();
    }
    public function notifadmin(){
     
      return $this->db->get('portofolio')->result();
    }
         }
