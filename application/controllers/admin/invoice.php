<?php  

class Invoice extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
														  Anda belum Login, silahkan login!
														 </div>');
			redirect('auth');
		}
	}

	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data(); 
		$this->load->view('templates_tabel/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates_tabel/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function edit($id)
	{
		$where = array('id' =>$id);
		$data['invoice'] = $this->model_invoice->edit_invoice($where, 't_invoice')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_invoice', $data);
		$this->load->view('templates_admin/footer');

	}

	public function update(){
		$id 	    = $this->input->post('id');
		$nama 	    = $this->input->post('nama');
		$alamat 	= $this->input->post('alamat');
		$status 	= $this->input->post('status');
		

		$data = array(

			'nama'		    => $nama,
			'alamat'		=> $alamat,
			'status'		=> $status,
			
		);

		$where = array(
			'id'	=> $id
		);

		$this->model_invoice->update_data($where,$data, 't_invoice');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/invoice/index');
	}
}
?>