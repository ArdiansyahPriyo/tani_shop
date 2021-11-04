<?php  

class Kategori extends CI_Controller{
	public function pupuk(){
		$data['pupuk'] = $this->model_kategori->data_pupuk()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pupuk', $data);
		$this->load->view('templates/footer');
	}

	public function pestisida(){
		$data['pestisida'] = $this->model_kategori->data_pestisida()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pestisida', $data);
		$this->load->view('templates/footer');
	}

	public function benih(){
		$data['benih'] = $this->model_kategori->data_benih()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('benih', $data);
		$this->load->view('templates/footer');
	}

	public function perlengkapan(){
		$data['perlengkapan'] = $this->model_kategori->data_perlengkapan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('perlengkapan', $data);
		$this->load->view('templates/footer');
	}
}