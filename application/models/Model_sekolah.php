<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_sekolah extends CI_Model {

		public function ambil_sekolah() {
			return $this->db->get('ms_sekolah');
			
		}

		public function ambil_sekolahid(){
			return $this->db->get_where('ms_sekolah','id_sekolah');
		}

		public function simpan_sekolah($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_sekolah($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_sekolah($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_sekolah($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
