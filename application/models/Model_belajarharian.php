<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_belajarharian extends CI_Model {

		public function belajarharian_cetakid(){
			$sql="select a.*,b.nama_guru,c.nama_siswa,d.nama_mapel,e.nama_kelas from belajarharian as a join ms_guru as b on a.id_guru=b.id_guru join ms_siswa as c on a.id_siswa=c.id_siswa join ms_mapel as d on a.id_mapel=d.id_mapel join ms_kelas as e on a.id_kelas=e.id_kelas ";
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
