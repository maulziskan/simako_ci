<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_karyawan extends CI_Model {

		public function ambil_karyawan() {
			return $this->db->get('ms_karyawan');
			
		}

		public function ambil_karyawanid(){
			return $this->db->get_where('ms_karyawan','id_karyawan');
		}

		public function simpan_karyawan($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_karyawan($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_karyawan($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_karyawan($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
