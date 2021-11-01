<?php  

class Data_user extends CI_Controller{

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
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('templates_tabel/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_user', $data);
		$this->load->view('templates_tabel/footer');
	}
}
?>