<?php
class Bansos extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_bansos');
        $this->load->helper(array('url','html','file','form','download'));

    }

    public function index()
	{
            $data['record']=  $this->model_bansos->tampil_data();
            $this->load->view('view_data',$data);
	}
    
    public function cari(){
        $id_kat=$_GET['id_kat'];
        $cari =$this->model_bansos->cari($id_kat)->result();
        echo json_encode($cari);
    } 

    public function search(){

            $keyword = $this->input->post('nik');
    
            $data['record']=$this->model_bansos->tampilkan($keyword);

            $this->load->view('view_data',$data);
        }
}
?>
