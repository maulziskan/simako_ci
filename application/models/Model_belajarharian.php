<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_belajarharian extends CI_Model {

		public function autoid_belajarharian(){
			$sql="select max(id_belajarharian) as noakhir from belajarharian where month(tgl_belajar)=month(curdate()) and year(tgl_belajar)=year(curdate())";
			$this->db->query($sql);
		}

		public function ambil_belajarharian() {
			return $this->db->get('belajarharian');
			
		}

		public function ambil_belajarharianid(){
			return $this->db->get_where('belajarharian','id_belajarharian');
		}

		public function simpan_belajarharian($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_belajarharian($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_belajarharian($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_belajarharian($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
