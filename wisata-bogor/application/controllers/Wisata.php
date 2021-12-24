<?php 
defined('BASEPATH') or exit('No direct script access allowed'); 

	class Wisata extends CI_Controller 
	{ 
		public function __construct() 
		{ 
			parent::__construct(); 
			$this->load->helper('pustaka');
			cek_login(); 
		}

	//manajemen Wisata 
		public function index() 
		{ 
			$data['judul'] = 'Data Wisata'; 
			$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
			$data['wisata'] = $this->ModelWisata->getWisata()->result_array(); 
			$this->form_validation->set_rules('nama_wisata', 'Nama wisata', 'required|min_length[3]', [ 
				'required' => 'Nama Wisata harus diisi', 
				'min_length' => 'Nama Wisata terlalu pendek' 
				]); 
			$this->form_validation->set_rules('kategori', 'Kategori', 'required', [ 
				'required' => 'Kategori harus diisi' 
				]); 
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|min_length[3]', [ 
				'required' => 'Keterangan harus diisi', 
				'min_length' => 'Keterangan terlalu pendek' 
				]); 
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [ 
				'required' => 'Alamat harus diisi', 
				'min_length' => 'Alamat terlalu pendek' 
				]);
			$this->form_validation->set_rules('htm', 'HTM', 'required|numeric', [ 
			'required' => 'HTM harus diisi', 
			'numeric' => 'Yang anda masukan bukan angka' 
				]); 

			//konfigurasi sebelum gambar diupload 
			$config['upload_path'] = './assets/img/upload/'; 
			$config['allowed_types'] = 'jpg|png|jpeg'; 
			$config['max_size'] = '3000'; 
			$config['max_width'] = '1024'; 
			$config['max_height'] = '1000'; 
			$config['file_name'] = 'img' . time(); 
			$this->load->library('upload', $config); 

			if ($this->form_validation->run() == false) { 
				$this->load->view('templates/header', $data); 
				$this->load->view('templates/sidebar', $data); 
				$this->load->view('templates/topbar', $data); 
				$this->load->view('wisata/index', $data); 
				$this->load->view('templates/footer'); 
			} else { 
				if ($this->upload->do_upload('image')) { 
					$image = $this->upload->data(); 
					$gambar = $image['file_name']; 
				} else { 
					$gambar = ''; 
				} 
				$data = [ 'nama_wisata' => $this->input->post('nama_wisata', true), 'kategori' => $this->input->post('kategori', true), 'keterangan' => $this->input->post('keterangan', true), 'alamat' => $this->input->post('alamat', true), 'htm' => $this->input->post('htm', true), 'gambar' => $gambar ]; $this->ModelWisata->simpanWisata($data); 
				redirect('wisata'); 
			} 
		} 

		public function ubahWisata() 
		{ 
			$data['judul'] = 'Ubah Data Wisata'; $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
			$data['wisata'] = $this->ModelWisata->wisataWhere(['id_wisata' => $this->uri->segment(3)])->result_array();
			$this->form_validation->set_rules('nama_wisata', 'Nama wisata', 'required|min_length[3]', [ 
				'required' => 'Nama Wisata harus diisi', 
				'min_length' => 'Nama Wisata terlalu pendek' 
				]); 
			$this->form_validation->set_rules('kategori', 'Kategori', 'required', [ 
				'required' => 'Kategori harus diisi' 
				]); 
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|min_length[3]', [ 
				'required' => 'Keterangan harus diisi', 
				'min_length' => 'Keterangan terlalu pendek' 
				]); 
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [ 
				'required' => 'Alamat harus diisi', 
				'min_length' => 'Alamat terlalu pendek' 
				]);
			$this->form_validation->set_rules('htm', 'HTM', 'required|numeric', [ 
			'required' => 'HTM harus diisi', 
			'numeric' => 'Yang anda masukan bukan angka' 
				]); 
				
				//konfigurasi sebelum gambar diupload 
				$config['upload_path'] = './assets/img/upload/'; 
				$config['allowed_types'] = 'jpg|png|jpeg'; 
				$config['max_size'] = '3000'; 
				$config['max_width'] = '1024'; 
				$config['max_height'] = '1000'; $config['file_name'] = 'img' . time(); 

				//memuat atau memanggil library upload 
				$this->load->library('upload', $config); 
				if ($this->form_validation->run() == false) { 
					$this->load->view('templates/header', $data); 
					$this->load->view('templates/sidebar', $data); 
					$this->load->view('templates/topbar', $data); 
					$this->load->view('wisata/ubah_wisata', $data); 
					$this->load->view('templates/footer'); 
				} else { 
					if ($this->upload->do_upload('image')) { 
						$image = $this->upload->data(); 
						unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE)); 
						$gambar = $image['file_name']; 
					} else { 
						$gambar = $this->input->post('old_pict', TRUE); 
					} 
					$data = [ 'nama_wisata' => $this->input->post('nama_wisata', true), 'kategori' => $this->input->post('kategori', true), 'keterangan' => $this->input->post('keterangan', true), 'alamat' => $this->input->post('alamat', true), 'htm' => $this->input->post('htm', true), 'image' => $gambar ]; 
					$this->ModelWisata->updateWisata($data, ['id_wisata' => $this->input->post('id_wisata')]); 
					redirect('wisata'); 
				} 
		}

		public function hapusWisata() 
		{ 
			$where = ['id_wisata' => $this->uri->segment(3)]; 
			$this->ModelWisata->hapusWisata($where); 
			redirect('wisata'); 
		}

	}
