<?php  

class Data_barang extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
														  Anda belum Login, silahkan login!
														 </div>');
			redirect('auth');
		}
	}
	public function index(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_tabel/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_tabel/footer');
		// echo "<pre>";
		// print_r($data);print_r(exit);
	}
}

?>