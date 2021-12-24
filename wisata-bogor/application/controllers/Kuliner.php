<?php 
defined('BASEPATH') or exit('No direct script access allowed'); 

	class Kuliner extends CI_Controller 
	{ 
		public function __construct() 
		{ 
			parent::__construct(); 
			$this->load->helper('pustaka');
			cek_login(); 
		}



	//manajemen Kuliner 
		public function index() 
		{ 
			$data['judul'] = 'Data Kuliner'; 
			$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
			$data['kuliner'] = $this->ModelWisata->getKuliner()->result_array(); 
			$this->form_validation->set_rules('nama_kuliner', 'Nama Kuliner', 'required|min_length[3]', [ 
				'required' => 'Nama Kuliner harus diisi', 
				'min_length' => 'Nama Kuliner terlalu pendek' 
				]); 
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|min_length[3]', [ 
				'required' => 'Keterangan harus diisi', 
				'min_length' => 'Keterangan terlalu pendek' 
				]); 
			$this->form_validation->set_rules('kategori', 'Kategori', 'required', [ 
				'required' => 'Kategori harus diisi' 
				]); 
			$this->form_validation->set_rules('harga', 'Harga', 'required|numeric', [ 
			'required' => 'Harga harus diisi', 
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
				$this->load->view('kuliner/index', $data); 
				$this->load->view('templates/footer'); 
			} else { 
				if ($this->upload->do_upload('image')) { 
					$image = $this->upload->data(); 
					$gambar = $image['file_name']; 
				} else { 
					$gambar = ''; 
				} 
				$data = [ 'nama_kuliner' => $this->input->post('nama_kuliner', true), 'keterangan' => $this->input->post('keterangan', true), 'kategori' => $this->input->post('kategori', true), 'alamat' => $this->input->post('alamat', true), 'harga' => $this->input->post('harga', true), 'gambar' => $gambar ]; $this->ModelWisata->simpanKuliner($data); 
				redirect('kuliner'); 
			} 
		} 

		public function ubahKuliner() 
		{ 
			$data['judul'] = 'Ubah Data Kuliner'; $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
			$data['kuliner'] = $this->ModelWisata->kulinerWhere(['id_kuliner' => $this->uri->segment(3)])->result_array();
			$this->form_validation->set_rules('nama_kuliner', 'Nama Kuliner', 'required|min_length[3]', [ 
				'required' => 'Nama Kuliner harus diisi', 
				'min_length' => 'Nama Kuliner terlalu pendek' 
				]); 
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|min_length[3]', [ 
				'required' => 'Keterangan harus diisi', 
				'min_length' => 'Keterangan terlalu pendek' 
				]); 
			$this->form_validation->set_rules('kategori', 'Kategori', 'required', [ 
				'required' => 'Kategori harus diisi' 
				]); 
			$this->form_validation->set_rules('harga', 'Harga', 'required|numeric', [ 
			'required' => 'Harga harus diisi', 
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
					$this->load->view('kuliner/ubah_kuliner', $data); 
					$this->load->view('templates/footer'); 
				} else { 
					if ($this->upload->do_upload('image')) { 
						$image = $this->upload->data(); 
						unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE)); 
						$gambar = $image['file_name']; 
					} else { 
						$gambar = $this->input->post('old_pict', TRUE); 
					} 
					$data = [ 'nama_kuliner' => $this->input->post('nama_kuliner', true), 'keterangan' => $this->input->post('keterangan', true), 'kategori' => $this->input->post('kategori', true), 'alamat' => $this->input->post('alamat', true), 'harga' => $this->input->post('harga', true), 'image' => $gambar ]; 
					$this->ModelWisata->updateKuliner($data, ['id_kuliner' => $this->input->post('id_kuliner')]); 
					redirect('kuliner'); 
				} 
		}

		public function hapusKuliner() 
		{ 
			$where = ['id_kuliner' => $this->uri->segment(3)]; 
			$this->ModelWisata->hapusKuliner($where); 
			redirect('kuliner'); 
		}

	}
