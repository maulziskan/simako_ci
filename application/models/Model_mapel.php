<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_mapel extends CI_Model {

		public function ambil_mapel() {
			return $this->db->get('ms_mapel');
			
		}

		public function ambil_mapelid(){
			return $this->db->get_where('ms_mapel','id_mapel');
		}

		public function simpan_mapel($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_mapel($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_mapel($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_mapel($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
