<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Bltdd extends CI_Controller {

    public function  __construct()
    {
		parent::__construct();
		$this->load->model('m_logo');
    }
	
	function index()
    {		
		$data['konten_logo'] = $this->m_logo->getLogo();
		$data['logo'] = $this->load->view('v_logo', $data, TRUE);
		$data['menu'] = $this->load->view('v_navbar', $data, TRUE);
		$data['content'] = $this->load->view('web/visimisi',$data,TRUE);
		$temp['footer'] = $this->load->view('v_footer',$data,TRUE);
		$this->load->view('templateHome',$temp);
	}
}
?>