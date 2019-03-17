<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_guru extends CI_Model {

		public function ambil_guru() {
			return $this->db->get('ms_guru');
			
		}

		public function ambil_guruid(){
			return $this->db->get_where('ms_guru','id_guru');
		}

		public function simpan_guru($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_guru($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_guru($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_guru($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
