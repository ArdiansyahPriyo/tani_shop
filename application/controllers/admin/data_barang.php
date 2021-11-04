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

	public function tambah_aksi()
	{
		$nama_barang = $this->input->post('nama_barang');
		$detail 	 = $this->input->post('detail');
		$kategori	 = $this->input->post('kategori');
		$harga 		 = $this->input->post('harga');
		$stok        = $this->input->post('stok');
		$gambar		 = $_FILES['gambar']['name'];
		if ($gambar ='') {
			
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nama_barang' => $nama_barang,
			'detail'      => $detail,
			'kategori'    => $kategori,
			'harga'       => $harga,
			'stok'        => $stok,
			'gambar'      => $gambar
		);

		$this->model_barang->tambah_barang($data, 't_barang');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_barang'); 
	}

	public function detail($id_barang)
	{
		$data['barang'] = $this->model_barang->detail_barang($id_barang);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function edit($id)
	{
		$where = array('id_barang' =>$id);
		$data['barang'] = $this->model_barang->edit_barang($where, 't_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');

	}

	public function update(){
		$id 	= $this->input->post('id_barang');
		$nama_barang 	= $this->input->post('nama_barang');
		$detail 	= $this->input->post('detail');
		$kategori 	= $this->input->post('kategori');
		$harga 	= $this->input->post('harga');
		$stok 	= $this->input->post('stok');

		$data = array(

			'nama_barang'	=> $nama_barang,
			'detail'		=> $detail,
			'kategori'		=> $kategori,
			'harga'			=> $harga,
			'stok'			=> $stok
		);

		$where = array(
			'id_barang'	=> $id
		);

		$this->model_barang->update_data($where,$data, 't_barang');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_barang');
	}

	public function hapus (){
		$id_barang = $this->input->post('id_barang');
		$where = array('id_barang' => $id_barang);
		$this->db->delete('t_barang', $where);
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_barang');
	}
}

?>