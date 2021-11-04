<?php 

class Model_pembayaran extends CI_Model{
	
	public function tampil_data(){
		return $this->db->get('t_bayar');
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table); 
	}
}
?>