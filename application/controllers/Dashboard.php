<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
        parent::__construct();
        $this->load->model('model_bansos');
        $this->load->helper(array('url','html','file','form','download'));

    }
	public function index()
	{
		$this->load->view('login');
	}
	function login()
	{
		$username = $this->input->post('username'); 
    $password = md5($this->input->post('password')); 

    $user = $this->model_bansos->get($username); 
    if(empty($user)){ 
      /*$this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Username Tidak Ditemukan!</strong> '.$error.'.
                     </div>'
                   );*/
     redirect('dashboard'); 
    }else{
      if($password == $user->password){ 
        $session = array(
          'authenticated'=>true, 
          'username'=>$user->username,
          'id_user'=>$user->id_user,
          'password'=>$user->password
        );

        $this->session->set_userdata($session); $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Selamat Datang Admin!</strong>'.$error.'.
                     </div>'
                   );
        redirect('index.php/dashboard');
      }else{
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times; &nbsp;</span>
                        </button>
                        Password Yang Anda Masukkan Salah!'.$error.'.
                     </div>'
                   );
        redirect('dashboard'); // Redirect ke halaman login
      }
    }
	}
}
