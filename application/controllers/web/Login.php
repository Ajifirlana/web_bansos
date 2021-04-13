<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();


class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  $this->load->model('m_berita');
  $this->load->model('m_login');
    $this->load->model('m_regulasi');
    $this->load->helper('text');
    $this->load->library('pagination');
  }

  public function index()
  {

    $this->load->view('template_a'); 
    $this->load->view('v_login');
  }


  function ceklogin(){
    $nama_pengguna = $this->input->post('nama_pengguna'); 
    $password = md5($this->input->post('password')); 
    $user = $this->m_login->get($nama_pengguna); 
    if(empty($user)){ 
     $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Username Tidak Ditemukan!</strong> '.$error.'.
                     </div>'
                   );
     redirect('login'); 
    }else{
      if($password == $user->password){ 
        $session = array(
          'authenticated'=>true, 
          'nama_pengguna'=>$user->nama_pengguna,
          'id_pengguna'=>$user->id_pengguna
          
        );

        $this->session->set_userdata($session); 
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Selamat Datang Admin!</strong>
                     </div>'
                   );
        redirect('dashboard');
      }else{
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                       <strong>Password Yang Anda Masukkan Salah!</strong>'.$error.'.
                     </div>'
                   );
        redirect('login'); 
      }
    }
}


function logout(){
    $this->session->sess_destroy();
        Redirect('login');
   }

}

/* AJ3 */
/* ColorlIb*/