<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_walimurid extends CI_Model {

		public function ambil_walimurid() {
			return $this->db->get('ms_walimurid');
			
		}

		public function ambil_walimuridid(){
			return $this->db->get_where('ms_walimurid','id_walimurid');
		}

		public function simpan_walimurid($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_walimurid($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_walimurid($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_walimurid($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}


?>
