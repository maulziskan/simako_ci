<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_siswa extends CI_Model {

		public function ambil_siswa() {
			return $this->db->get('ms_siswa');
			
		}

		public function ambil_siswaid(){
			$this->db->select('id_siswa , nama_siswa');
			return $this->db->get('ms_siswa');
		}

		public function simpan_siswa($table,$data){
			$this->db->insert($table,$data);
		}

		public function edit_siswa($where,$table){		
			return $this->db->get_where($table,$where);
		}
	
		public function update_siswa($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus_siswa($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function upload(){
			$config['upload_path']='./upload/siswa/';
			$config['allowed_types']='gif|jpg|png|bmp';
			$config['overwrite']=true;
			$config['max_size']=2048;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto_siswa')){
				$return=array('result'=>'success','file'=>$this->upload->data(),'error'=>'');
				return $return;
			}else{
				$return=array('result'=>'failed','file'=>'','error'=>$this->upload->display_errors());
				return $return;
			}
		}

		public function edit_upload(){
			$config['upload_path']='./upload/siswa/';
			$config['allowed_types']='gif|jpg|png|bmp';
			$config['overwrite']=true;
			$config['max_size']=2048;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto_siswa')){
				$return=array('result'=>'success','file'=>$this->upload->data(),'error'=>'');
				return $return;
			}else{
				$return=array('result'=>'failed','file'=>'','error'=>$this->upload->display_errors());
				return $return;
			}
		}

	}


?>
