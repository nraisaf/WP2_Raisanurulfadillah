<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Frontend extends CI_Controller
{
    function __construct(){
    parent::__construct();
    } 

    public function index()
    {
        $data['wisata'] = $this->ModelWisata->getWisata()->result_array();
        $data['kuliner'] = $this->ModelWisata->getKuliner()->result_array();
        $data['judul'] = 'Home';
        $this->load->view('templates/header-frontend', $data);
        $this->load->view('frontend/wisata-frontend', $data);
        $this->load->view('templates/footer-frontend');
    }

    public function kulinerFrontend()
    {
        $data['wisata'] = $this->ModelWisata->getWisata()->result_array();
        $data['kuliner'] = $this->ModelWisata->getKuliner()->result_array();
        $data['judul'] = 'Home';
        $this->load->view('templates/header-frontend', $data);
        $this->load->view('frontend/kuliner-frontend', $data);
        $this->load->view('templates/footer-frontend');
    }
}
