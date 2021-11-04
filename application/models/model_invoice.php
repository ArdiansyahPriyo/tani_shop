<?php 

class Model_invoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp'); 
		$jasa_pengiriman = $this->input->post('jasa_pengiriman'); 
		$metode_pembayaran = $this->input->post('metode_pembayaran');  

		$invoice = array(
			'nama'          	=> $nama,
			'alamat'        	=> $alamat,
			'no_hp'				=> $no_hp,
			'jasa_pengiriman'	=> $jasa_pengiriman,
			'metode_pembayaran' => $metode_pembayaran,
			'tanggal_pesan' 	=> date('Y-m-d H:i:s'),
			'batas_bayar'   	=> date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
			'status' 			=> 'Belum dibayar',

		);

		$this->db->insert('t_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice'  => $id_invoice,
				'id_barang'   => $item['id'],
				'nama_barang' => $item['name'],
				'jumlah'      => $item['qty'],
				'harga'       => $item['price'],
			);
			$this->db->insert('t_pesanan', $data);
		}
		return TRUE;
	}
	public function tampil_data()
	{
		$result = $this->db->get('t_invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)->get('t_invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return false; 
		}
	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('t_pesanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false; 
		}
	}

	public function edit_invoice($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data); 
	}
}
?>