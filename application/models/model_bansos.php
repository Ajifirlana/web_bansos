<?php

class Model_bansos extends CI_Model{
     
    function tampil_data(){
        return $this->db->get('kategori_bansos');
    }
    
    function cari($id){
        $query= $this->db->get_where('kategori_bansos',array('id_kat'=>$id));
        return $query;
    }

    public function tampilkan($keyword){
			$this->db->select('*');
			$this->db->from('kategori_bansos');
			$this->db->like('id_kat',$keyword);
			
			return $this->db->get()->result();
		}
}
?>
