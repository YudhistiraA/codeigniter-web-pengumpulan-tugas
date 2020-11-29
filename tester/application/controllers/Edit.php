<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model('taskmodel');

  }
  public function index()
  {  $this->load->library('upload');
     $data['title'] = 'Edit Profile';
     $data['user'] = $this->db->get_where('user', ['email' =>
     $this->session->userdata('email')])->row_array();
    
     $this->form_validation->set_rules('name', 'Username', 'required|trim');
     if($this->form_validation->run() == false){
       $this->load->view('templates/header', $data);
       $this->load->view('templates/sidebar', $data);
       $this->load->view('templates/topbar', $data);
       $this->load->view('user/edit', $data);
       $this->load->view('templates/footer');
     } else{
       $name         = $this->input->post('name');
       $kota         = $this->input->post('kota');
       $nohp         = $this->input->post('nohp');
       $alamat       = $this->input->post('alamat');
       $umur         = $this->input->post('umur');
       $email        = $this->input->post('email');
       $deskripsi    = $this->input->post('deskripsi');
       $config['upload_path'] = './profile/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['encrypt_name'] = false; //Enkripsi nama yang terupload
       $config['file_name']            =  $this->session->userdata('id');
       $this->upload->initialize($config);
       if(!empty($_FILES['berkas']['name'])){

           if ($this->upload->do_upload('berkas')){
               $gbr = $this->upload->data();
               //Compress Image
               $this->db->set('name', $name);
               $this->db->set('kota', $kota);
               $this->db->set('nohp', $nohp);
               $this->db->set('umur', $umur);
               $this->db->set('alamat', $alamat);
               $this->db->where('email', $email);
               $this->db->set('deskripsi', $deskripsi);
               $this->db->set('image', $this->upload->data("file_name"));


               // $gambar=$gbr['file_name'];
               // $judul=$this->input->post('xjudul');
               // $this->m_upload->simpan_upload($judul,$gambar);
               $this->db->update('user');
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Profile has been updated!</div>');
               redirect('edit');
           }

       }else{
        $this->db->set('name', $name);
        $this->db->set('kota', $kota);
        $this->db->set('nohp', $nohp);
        $this->db->set('umur', $umur);
        $this->db->set('alamat', $alamat);
        $this->db->where('email', $email);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->update('user');
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Profile has been updated!</div>');
               redirect('edit');
       }

   }
     }
//         public function selesai($id){

//         if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
//           $this->portofoliomodel->update($id); // Panggil fungsi save() yang ada di SiswaModel.php
//           redirect('user/selesai');
//   }
//   $data['profile'] = $this->db->get('user')->result_array();
//   $data['user'] = $this->db->get_where('user', ['email' =>
//   $this->session->userdata('email')])->row_array();
//   $data['project'] = $this->taskmodel->view_by($id);
//   $data['portofolio'] = $this->portofoliomodel->selesai($id);
//   $this->load->view('templates/header', $data );
//       $this->load->view('templates/sidebar', $data);
//       $this->load->view('templates/topbar',$data);
//       $this->load->view('user/selesai',$data);
//       $this->load->view('templates/footer');
// }



        public function hapus($id){
        $this->taskmodel->hapusDataPortofolio($id); // Panggil fungsi delete() yang ada di SiswaModel.php
        redirect('edit/selesai');
      }
        public function portofolio()
             {
               $data['user'] = $this->db->get_where('user', ['email' =>
               $this->session->userdata('email')])->row_array();
               
               $data['portofolio'] = $this->taskmodel->view_porto($this->session->userdata('email'));
                $this->load->view('templates/header', $data );
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar');
                $this->load->view('user/portofolio',$data);
                $this->load->view('templates/footer');
            }





            public function selesai($id){
             $this->load->library('upload');
               $data['title'] = 'Edit Profile';
               $data['user'] = $this->db->get_where('user', ['email' =>
               $this->session->userdata('email')])->row_array();
               $this->form_validation->set_rules('email','required|trim');
               if($this->form_validation->run() == false){ 
               $data['project'] = $this->taskmodel->view_by($id);
               $this->load->view('templates/header', $data );
               $this->load->view('templates/sidebar', $data);
               $this->load->view('templates/topbar');
               $this->load->view('user/selesai',$data);
               $this->load->view('templates/footer');}

               if($this->input->post('submit')){
                $keterangan        = $this->input->post('keterangan');
                $date       = $this->input->post('date');
                $email       = $this->input->post('email');
                $nama      = $this->input->post('nama');
                date_default_timezone_set("Asia/Kolkata");
                $time =  Date('Y-m-d');
                $config['upload_path'] = './project/'; //path folder
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['encrypt_name'] = false; //Enkripsi nama yang terupload
         
                $this->upload->initialize($config);
                if(!empty($_FILES['berkas']['name'])){
         
                    if ($this->upload->do_upload('berkas')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $this->db->set('nama_project', $nama);
                        $this->db->set('id_karyawan', $this->session->userdata('id'));
                        $this->db->set('deskripsi_projek', $keterangan);
                        $this->db->set('date_created', $date);
                        $this->db->set('date_done', $time);
                        $this->db->set('email',$email);
                        $this->db->set('image', $this->upload->data("file_name"));
         
         
                        // $gambar=$gbr['file_name'];
                        // $judul=$this->input->post('xjudul');
                        // $this->m_upload->simpan_upload($judul,$gambar);
                        $this->db->insert('portofolio');
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Profile has been updated!</div>');
                        redirect('edit/index');
                    }
         
                }
                if (!$this->upload->do_upload('berkas'))
                {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> harus upload gambar</div>');
              redirect('edit/selesai/'.$id);
                }
              
              }
             
            
          }
            
          public function notifuser()
          {
          
           $data['user'] = $this->db->get_where('user', ['email' =>
           $this->session->userdata('email')])->row_array();
         
           $data['task'] = $this->taskmodel->view();
          
           // $data['project'] = $this->db->get_where('project', ['status' =>'implemented'])->countRow();
              $this->load->view('templates/header', $data);
              $this->load->view('templates/sidebar');
              $this->load->view('templates/topbar');
              $this->load->view('user/notif',$data);
              $this->load->view('templates/footer');
          }
            
          }