<?php  

class Model_user extends CI_Model{
	public function tampil_data(){
		return $this->db->get('t_user');
	}

	public function tambah_user($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_user($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data); 
	}
}
?>