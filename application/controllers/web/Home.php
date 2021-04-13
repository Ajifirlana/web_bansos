<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Home extends CI_Controller {

    public function  __construct()
    {
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_regulasi');
		$this->load->model('m_logo');
		$this->load->helper('text');
		$this->load->library('pagination');
		
    }
	
	function index()
    {		
    	$config['base_url'] =base_url().'/web/home/index';
	        $config['total_rows'] = $this->m_berita->berita_all_numrows(); //$this->db->get('tbl_berita')->num_rows();
	        $config['per_page'] = '2';
	        $config['num_links'] = 3;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>'; 
		$config['num_tag_open'] = '<li>'; 
		$config['num_tag_close'] = '</li>'; 
		$config['cur_tag_open'] = '<li class="active"><span>'; 
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>'; 
		$config['prev_tag_open'] = '<li>'; 
		$config['prev_tag_close'] = '</li>'; 
		$config['next_tag_open'] = '<li>'; 
		$config['next_tag_close'] = '</li>'; 
		$config['first_link'] = '&laquo;'; 
		$config['prev_link'] = '&lsaquo;'; 
		$config['last_link'] = '&raquo;'; 
		$config['next_link'] = '&rsaquo;'; 
		$config['first_tag_open'] = '<li>'; 
		$config['first_tag_close'] = '</li>'; 
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
	        $this->pagination->initialize($config);        
	        $pag = $this->db->get($this->m_berita->berita_all(), $config['per_page'], $this->uri->segment(4));  //$this->m_berita->berita_all( $config['per_page']); //      
	        //$pag = $this->m_berita->berita_all( 6,4); //      
	        $data['berita'] = $pag->result();
		
    	$data['berita'] = $this->m_berita->get_recent_berita_all();
		$data['beritas'] = $this->m_berita->beritaall();

     	$data['konten_logo'] = $this->m_logo->getLogo();
		$data['base_url'] = $this->config->item('base_url');
		$data['logo'] = $this->load->view('v_logo', $data, TRUE);
		$data['menu'] = $this->load->view('v_navbar', $data, TRUE);
		$data['content'] = $this->load->view('web/regulasi',$data,TRUE);
		$temp['footer'] = $this->load->view('v_footer',$data,TRUE);
		$this->load->view('templateHome',$temp);
	}
	
	
}
?>