<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_siswa extends CI_Model {

		public function ambil_siswa() {
			$query = $this->db->get('ms_siswa');
			return $query;
		}

	}

?>
