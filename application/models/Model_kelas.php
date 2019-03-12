<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_kelas extends CI_Model {

		public function ambil_kelas() {
			return $this->db->get('ms_kelas');
			
		}

		public function ambil_kelasid(){
			return $this->db->get_where('ms_kelas','id_kelas');
		}

		public function simpan_kelas($table,$data){
			$this->db->insert($table,$data);
		}

	}

?>
