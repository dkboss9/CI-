<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function ajaxRequest()
	{ 
		$this->load->view('table');
	}

	public function ajaxRequestPost()
	{ 
		$names = $this->input->post("name");
		$classes = $this->input->post("classes");
		$rolls = $this->input->post("roll");
		$image = $this->input->post("image");
		$this->load->model('UserModel');
		
		foreach ($names as $key => $name) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|png|jpg|jpeg';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
				$data = array(
				'name'=>$name,
				'classes'=>$classes[$key],
				'roll'=>$rolls[$key]
			);
			$this->UserModel->setData($data);
		}
		session_start();
		$_SESSION['id'] = 1;
		$result['datas'] = $this->UserModel->getData();
		$this->load->view('details',$result);
		
		
	}
	public function delete($id)
	{
		$this->load->model('UserModel');
		$this->UserModel->delete($id);
		$result['datas'] = $this->UserModel->getData();
		$this->load->view('view_details',$result);
		
	}
	public function remove($id)
	{
		session_start();
		$_SESSION['id'] = $id;
		$this->load->view('viewInput');
	}


	public function image_upload()
	{
		$this->load->model('UserModel');
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|png|jpg|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                       
                }
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$title = $this->input->post('title');
			$image = $data['upload_data']['file_name'];
			$this->UserModel->upload($title, $image);
		}
		$result['datas'] = $this->UserModel->get_image();
		$this->load->view('view_image',$result);
	}



	public function image_uploads()
	{
		$this->load->model('UserModel');
		$i = $this->input->post('id');
		$roll = $this->input->post('roll1');
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|png|jpg|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		$name = $this->input->post('id');
		if ( ! $this->upload->do_upload('image1'))
            {
                $error = array('error' => $this->upload->display_errors());
            	print_r($error);
            	die;           
            }
		else
			{
				$data = array('upload_data' => $this->upload->data());
				$title = $this->input->post('title');
				$image = $data['upload_data']['file_name'];
				$this->UserModel->upload($title, $image);
			}
		$result['datas'] = $this->UserModel->get_image();
		$this->load->view('view_image',$result);
	}
}


