<?php

class Admin extends CI_Controller
{
  function __construct(){
      parent::__construct();
      $this->load->model('taskmodel');
    }

  public function index()
       {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['portofolio'] = $this->db->get('portofolio')->result_array();
        $data['task'] = $this->taskmodel->view();
        $data['reviewed'] = $this->taskmodel->countAll();
        $data['project'] = $this->taskmodel->countAllProject('project');
        $data['karyawan'] = $this->taskmodel->countAllUser('user');
        // $data['project'] = $this->db->get_where('project', ['status' =>'implemented'])->countRow();
           $this->load->view('templates/header', $data);
           $this->load->view('templates/sidebar');
           $this->load->view('templates/topbar');
           $this->load->view('admin/index',$data);
           $this->load->view('templates/footer');
       }
       public function add(){
         $data['user'] = $this->db->get_where('user', ['email' =>
         $this->session->userdata('email')])->row_array();
        //  $data['project'] = $this->db->get('project')->result_array();
         $data['project'] =  $this->taskmodel->getemail();
           $data['portofolio'] = $this->db->get('portofolio')->result_array();
               if($this->input->post('submit')){
                // Jika user mengklik tombol submit yang ada di form
                   $this->taskmodel->save();
                   $ci = get_instance();
               $ci->load->library('email');
               $config['protocol'] = "smtp";
               $config['smtp_host'] = "ssl://smtp.gmail.com";
               $config['smtp_port'] = "465";
               $config['smtp_user'] = "aryarajasa0@gmail.com";//emailmu
               $config['smtp_pass'] = "codelyoko";//passwordmu
               $config['charset'] = "utf-8";
               $config['mailtype'] = "html";
               $config['newline'] = "\r\n";
               $ci->email->initialize($config);
               $ci->email->from('dimasprayogi833@gmail.com','pt gumcode');
               $list = array('dhimaswahyu0847@gmail.com','aryarajasa0@gmail.com','anatasya_galuh_27rpl@student.smktelkom-mlg.sch.id','m_rifqi_27rpl@student.smktelkom-mlg.sch.id');
               $ci->email->to($list);
               $ci->email->subject('PRAKERIN');
               $ci->email->message('tugas baru');
               if ($this->email->send()) {
                 redirect('admin/index');
               } else {
                   show_error($this->email->print_debugger());
               }
                     redirect('admin/index');
               }

               $this->load->view('templates/header', $data);
               $this->load->view('templates/sidebar');
               $this->load->view('templates/topbar');
               $this->load->view('admin/create');
               $this->load->view('templates/footer');
             }



  public function karyawan()
       {

         $data['profile'] = $this->db->get('user')->result_array();
         $data['user'] = $this->db->get_where('user', ['email' =>
         $this->session->userdata('email')])->row_array();
         $data['project'] = $this->db->get('project')->result_array();
          $data['portofolio'] = $this->db->get('portofolio')->result_array();
          $this->load->view('templates/header', $data );
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar');
          $this->load->view('admin/karyawan');
          $this->load->view('templates/footer');
      }


      public function hapuskaryawan($id){

      $this->task_model->hapusDataKaryawan($id);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect('admin/karyawan');
      }
      public function hapus($id){
      $this->taskmodel->hapusData($id); // Panggil fungsi delete() yang ada di SiswaModel.php
      redirect('admin/index');
    }

            public function edit($id){

            if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
              $this->taskmodel->update($id); // Panggil fungsi save() yang ada di SiswaModel.php
              redirect('admin/index');
      }
      $data['profile'] = $this->db->get('user')->result_array();
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      $data['project'] = $this->taskmodel->view_by($id);
      $this->load->view('templates/header', $data );
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar',$data);
          $this->load->view('admin/edit',$data);
          $this->load->view('templates/footer');
    }
    public function nilai($nama)
             {

               $data['user'] = $this->db->get_where('user', ['email' =>
               $this->session->userdata('email')])->row_array();
               
               $data['portofolio'] = $this->taskmodel->view_project($nama);
                $this->load->view('templates/header', $data );
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar');
                $this->load->view('admin/nilai',$data);
                $this->load->view('templates/footer');
            }

            public function portofolio($id)
            {
              $data['user'] = $this->db->get_where('user', ['email' =>
              $this->session->userdata('email')])->row_array();
              
              $data['portofolio'] = $this->taskmodel->karyawan($id);
               $this->load->view('templates/header', $data );
               $this->load->view('templates/sidebar', $data);
               $this->load->view('templates/topbar');
               $this->load->view('admin/portofolio',$data);
               $this->load->view('templates/footer');
           }
           public function hapusportofolio($id){
            $this->taskmodel->hapusDataPortofolio($id); // Panggil fungsi delete() yang ada di SiswaModel.php
            redirect('admin/portofolio/'.$this->session->userdata('id'));
          }
          public function notif()
            {
              $data['user'] = $this->db->get_where('user', ['email' =>
              $this->session->userdata('email')])->row_array();
              
              $data['portofolio'] = $this->taskmodel->notifadmin();
               $this->load->view('templates/header', $data );
               $this->load->view('templates/sidebar', $data);
               $this->load->view('templates/topbar');
               $this->load->view('admin/notif',$data);
               $this->load->view('templates/footer');
           }
}
