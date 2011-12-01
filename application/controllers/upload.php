<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		
		$this->load->view('upload/upload_form');
	}
	
	function do_upload()
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|mp4';  
			$config['max_size']	= '400000';
			$config['remove_spaces'] = TRUE;
			//$config['max_width']  = '1024';
			//$config['max_height']  = '768';

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload/upload_form', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());

				$this->load->view('upload/upload_success', $data);
			}
		}
	
}