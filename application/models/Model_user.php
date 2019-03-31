<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('ms_userheader', $data);
			return $query;
		}

		public function ambil_user() {
			return $this->db->get('ms_userheader');
			
		}

		public function ambil_userid(){
			$this->db->select('kd_user , nama_user');
			return $this->db->get('ms_userheader');
		}

		public function simpan_user($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_user($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_user($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_user($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}

?>
