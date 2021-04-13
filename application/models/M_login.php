<?php
class M_login extends CI_Model {

  	function __construct()
  {
  	
  }
  
  	public function get($nama_pengguna){
        $this->db->where('nama_pengguna', $nama_pengguna); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('tbl_pengguna')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
	
}
?>