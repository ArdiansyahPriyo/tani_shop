<?php  

class Auth extends CI_Controller{

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates_admin/header');
			$this->load->view('login');
			$this->load->view('templates_admin/footer');
		}else{
			$auth = $this->model_auth->cek_login();
			$data = $this->model_auth->cek_login();

			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
														  Username atau Password Salah!
														  
														</div>');
				redirect('auth');
			}else {
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);
				$this->session->set_userdata('nama',$data->nama);
				$this->session->set_userdata('id',$data->id);

				switch($auth->role_id){
					case 1 : redirect('admin/dashboard');
						break;
					case 2 : redirect('home'); 
						break;
					default: break;
				}
			}

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}