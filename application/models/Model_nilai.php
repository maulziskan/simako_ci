<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_nilai extends CI_Model {

		public function ambil_nilai() {
			return $this->db->get('ms_nilai');
			
		}

		public function ambil_nilaiid(){
			$this->db->select('id_nilai , nama_nilai');
			return $this->db->get('ms_nilai');
		}

		public function simpan_nilai($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_nilai($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_nilai($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_nilai($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
