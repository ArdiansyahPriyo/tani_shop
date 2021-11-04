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

	public function tambah_aksi()
	{
		$nama 		 = $this->input->post('nama');
		$username 	 = $this->input->post('username');
		$password	 = $this->input->post('password');
		$role_id     = $this->input->post('role_id');
	
		$data = array(
			'nama' 		  => $nama,
			'username'    => $username,
			'password'    => md5($password),
			'role_id'     => $role_id,
			'status'	=> "Aktif"
		);

		$this->model_user->tambah_user($data, 't_user');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_user'); 
	}

	public function hapus (){
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->db->delete('t_user', $where);
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_user');
	}

	public function edit($id)
	{
		$where = array('id' =>$id);
		$data['user'] = $this->model_user->edit_user($where, 't_user')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_user', $data);
		$this->load->view('templates_admin/footer');

	}

	public function update(){
		$id 	    = $this->input->post('id');
		$nama 	    = $this->input->post('nama');
		$username 	= $this->input->post('username');
		//$password 	= $this->input->post('password');
		$role_id 	= $this->input->post('role_id');
		

		$data = array(

			'nama'		    => $nama,
			'username'		=> $username,
			//'password'		=> $password,
			'role_id'	    => $role_id
		);

		$where = array(
			'id'	=> $id
		);

		$this->model_user->update_data($where,$data, 't_user');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show" role="alert">
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_user');
	}
}
?>