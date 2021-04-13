<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cek_bantuan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model('m_logo');
       $this->load->model('m_bantuan');

       	$this->load->model('m_berita');
		$this->load->helper('text');
		$this->load->library('pagination');



    }  
    
    public function index()
    {
		
     	$data['konten_logo'] = $this->m_logo->getLogo();

		$data['base_url']=$this->config->item('base_url');
		$data['logo'] = $this->load->view('v_logo', $data, TRUE);
		$data['menu'] = $this->load->view('v_navbar', $data, TRUE);
		$data['content'] = $this->load->view('web/cek_bantuan',$data,TRUE);
		$temp['footer'] = $this->load->view('v_footer',$data,TRUE);
		$this->load->view('templateHome',$temp);	
    }
    function kirim_aduan()
    {
    	$nik = $this->input->post('nik');
    	$isi_aduan = htmlentities($this->input->post('isi_aduan'));
		
		$data = array(
			'nik' => $nik,
			'isi_aduan' => $isi_aduan
			);
		
    	$cek = $this->db->query("select * from tbl_penduduk where nik='$nik'")->num_rows();

    	if($cek > 0)
    	{
			$this->m_bantuan->insertaduan($data,'tbl_aduan');

			$this->session->set_flashdata('msg',
             '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong>Aduan Berhasil Di Kirim</div>');
			redirect('web/cek_bantuan');
    	}
    		$this->session->set_flashdata('msg',
             '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong></strong>Aduan Gagal Di Kirim</div>');
    redirect('web/cek_bantuan');
    }

		public function search(){
			$keyword = $this->input->post('keyword');
			$data['content']=$this->m_bantuan->hslcari($keyword);
			$data['konten_logo'] = $this->m_logo->getLogo();
		$data['base_url']=$this->config->item('base_url');
		$data['logo'] = $this->load->view('v_logo', $data, TRUE);
		$data['menu'] = $this->load->view('v_navbar', $data, TRUE);
		$data['content'] = $this->load->view('web/hslcari',$data,TRUE);
		$data['footer'] = $this->load->view('v_footer',$data,TRUE);
			$this->load->view('templateHome',$data);
		}

	function _setup_pagination($url, $total_results, $results_per_page)
	{
		// Ensure the pagination library is loaded
		$this->load->library('pagination');
		
		// This is messy. I'm not sure why the pagination class can't work
		// this out itself...
		//$uri_segment = count(explode('/', $url));
		
		//pagination
		$config['base_url'] =site_url($url);
		$config['enable_query_strings'] = TRUE; 
        $config['total_rows'] = $total_results;
        $config['per_page'] = '3';
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
		// Initialise the pagination class, passing in some minimum parameters
		/*$this->pagination->initialize(array(
			'base_url' => site_url($url),
			'uri_segment' => 4,
			'total_rows' => $total_results,
			'per_page' => $results_per_page
		));*/
	}
    
}

/* End of file chart.php */
/* Location: ./application/controllers/chart.php */