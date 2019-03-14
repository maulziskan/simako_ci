<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_belajar extends CI_Model {

		public function ambil_belajar() {
			return $this->db->get('ms_belajar');
			
		}

		public function ambil_belajarid(){
			return $this->db->get_where('ms_belajar','id_belajar');
		}

		public function simpan_belajar($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_belajar($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_belajar($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_belajar($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
