<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_karyawan extends CI_Model {

		public function ambil_karyawan() {
			return $this->db->get('ms_karyawan');
			
		}

		public function ambil_karyawanid(){
			$this->db->select('id_karyawan , nama_karyawan');
			return $this->db->get('ms_karyawan');
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

		public function upload(){
			$config['upload_path']='./upload/karyawan/';
			$config['allowed_types']='gif|jpg|png|bmp';
			$config['overwrite']=true;
			$config['max_size']=2048;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto_karyawan')){
				$return=array('result'=>'success','file'=>$this->upload->data(),'error'=>'');
				return $return;
			}else{
				$return=array('result'=>'failed','file'=>'','error'=>$this->upload->display_errors());
				return $return;
			}
		}

		public function edit_upload(){
			$config['upload_path']='./upload/karyawan/';
			$config['allowed_types']='gif|jpg|png|bmp';
			$config['overwrite']=true;
			$config['max_size']=2048;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto_karyawan')){
				$return=array('result'=>'success','file'=>$this->upload->data(),'error'=>'');
				return $return;
			}else{
				$return=array('result'=>'failed','file'=>'','error'=>$this->upload->display_errors());
				return $return;
			}
		}

	}


?>
