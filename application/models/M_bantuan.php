<?php
class M_bantuan extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
    public function hslcari($keyword){
			$this->db->select('*');
			$this->db->from('tbl_penduduk');
		
			$this->db->like('nik',$keyword);
			$this->db->limit('1');

			return $this->db->get()->result();
		}

		public function tampilbantuan(){
			return $query = $this->db->query("SELECT * FROM tbl_penduduk ORDER BY id_penduduk DESC");
    
		}

		public function dtaduan(){
			return $query = $this->db->query("SELECT * FROM tbl_aduan ORDER BY id desc");
    
		}

	function count_search_results($terms)
	{
		// Run SQL to count the total number of search results
		$this->db->select('*');
		$this->db->from('tbl_pages');
		$this->db->like('content',$terms);
		$this->db->or_like('title',$terms);
		return $this->db->count_all_results();
	}

	public function delete_data_by_pk($tbl, $where, $id)
	{
		$this->db->where($where, $id);
		$this->db->delete($tbl);


	}

	function insertaduan($data,$table){
		$this->db->insert($table,$data);
	}
}
?>