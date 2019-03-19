<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_kelas extends CI_Model {

		public function ambil_kelas() {
			return $this->db->get('ms_kelas');
			
		}

		public function ambil_kelasid(){
			$this->db->select('id_kelas , nama_kelas');
			return $this->db->get('ms_kelas');
		}

		public function simpan_kelas($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_kelas($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_kelas($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_kelas($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
