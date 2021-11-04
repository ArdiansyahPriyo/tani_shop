<?php  

class Model_kategori extends CI_Model{
	public function data_pupuk()
	{
		return $this->db->get_where("t_barang", array('kategori' => 'pupuk'));
	}

	public function data_pestisida()
	{
		return $this->db->get_where("t_barang", array('kategori' => 'pestisida'));
	}

	public function data_benih()
	{
		return $this->db->get_where("t_barang", array('kategori' => 'benih'));
	}

	public function data_perlengkapan()
	{
		return $this->db->get_where("t_barang", array('kategori' => 'perlengkapan'));
	}
}