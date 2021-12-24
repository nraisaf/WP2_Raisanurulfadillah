<?php 
defined('BASEPATH') or exit('No direct script access allowed'); 

class ModelWisata extends CI_Model 
{ 
	//manajemen wisata 
	public function getWisata()
	{
       return $this->db->get('wisata');
    }

	public function wisataWhere($where) 
	{ 
		return $this->db->get_where('wisata', $where); 
	} 

	public function simpanWisata($data = null) 
	{ 
		$this->db->insert('wisata',$data); 
	} 

	public function updateWisata($data = null, $where = null) 
	{ 
		$this->db->update('wisata', $data, $where); 
	} 

	public function hapusWisata($where = null) 
	{ 
		$this->db->delete('wisata', $where); 
	} 

	public function getKuliner()
    {
        return $this->db->get('wisata_kuliner');
    }

	public function kulinerWhere($where) 
	{ 
		return $this->db->get_where('wisata_kuliner', $where); 
	} 

	public function simpanKuliner($data = null) 
	{ 
		$this->db->insert('wisata_kuliner',$data); 
	} 

	public function updateKuliner($data = null, $where = null) 
	{ 
		$this->db->update('wisata_kuliner', $data, $where); 
	} 

	public function hapusKuliner($where = null) 
	{ 
		$this->db->delete('wisata_kuliner', $where); 
	}

	public function total($field, $where) 
	{ 
		$this->db->select_sum($field); 
		if(!empty($where) && count($where) > 0)
			{ 
				$this->db->where($where); 
			}
			$this->db->from('wisata'); 
			return $this->db->get()->row($field); 
	} 

}
?>