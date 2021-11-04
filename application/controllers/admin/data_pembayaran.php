<?php  

class Data_pembayaran extends CI_Controller{

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
		$data['pembayaran'] = $this->model_pembayaran->tampil_data()->result();
		$this->load->view('templates_tabel/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pembayaran', $data);
		$this->load->view('templates_tabel/footer');
	}

	public function hapus (){
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->db->delete('t_bayar', $where);
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pembayaran');
	}
}
?>