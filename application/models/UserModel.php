<?php
	class UserModel extends CI_Model
	{

		public function getData()
		{
			$this->load->database();
			$data = $this->db->get('tbl_detail');
			return $data->result();

		}
		public function setData($data)
							
		{
			$this->load->database();
			return $this->db->insert('tbl_detail', $data);
		}

		public function delete($id)
		{
			$this->load->database();
			$this->db->where('id', $id);
			$this->db->delete('tbl_detail');
		}

		public function upload($title, $image)
		{
			$data = array('title'=>$title,'image'=>$image);
			return $this->db->insert('tbl_file',$data);
		}
		public function get_image()
		{
			$data = $this->db->get('tbl_file');
			return $data->result();
		}
	}
?>