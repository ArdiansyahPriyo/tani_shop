<?php  

class Model_user extends CI_Model{
	public function tampil_data(){
		return $this->db->get('t_user');
	}
}
?>