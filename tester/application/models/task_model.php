<?php
class task_model extends CI_Model{
public function hapusData($id){
$this->db->where('id', $id);
$this->db->delete('project'); // Untuk mengeksekusi perintah delete data
}
public function hapusDataKaryawan($id){
$this->db->where('id', $id);
$this->db->delete('user'); // Untuk mengeksekusi perintah delete data
}

}
