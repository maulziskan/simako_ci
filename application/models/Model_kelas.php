<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_kelas extends CI_Model {

		public function ambil_kelas() {
			$query = $this->db->get('ms_kelas');
			return $query;
		}

	}

?>
