<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		
			$this->load->model('profile_model');
			
			$data['query'] = $this->db->get('profiles');
			
			$this->load->view('profile/profile_index', $data);
			
	}
	
	function create(){
		
	
		
		
		$this->load->view('profile/profile_new');
	}
	
	function insert_profile(){
	    
		$this->load->model('profile_model');
		
		//upload
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

			$this->load->view('profile/profile_new', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->profile_model->insert_profile(); 
			$this->load->view('upload/upload_success', $data);
		}
		
		//end upload
		
		//$this->db->insert('profiles', $this->input->post());
		//redirect('profile', 'location');
		
		
	}
	
	function update(){
		//this is the session login validation block
		//it must be listed first for each secure page in the controller
		if ($this->session->userdata('logged_in') == FALSE)
		{
		     redirect('/profile/login/', 'refresh');
		}
		
			
			$this->load->view('profile/profile_update');
			
	
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
	
	function login(){
		
		$this->load->view('profile/login_form');
		//todo add session logging to database
		
	}
	
	function logout(){
		
		//todo close session out and logout.
	}
	
	
	function auth(){
		
			$this->load->model('profile_model');
			$this->profile_model->auth();
		
		
	}
	
	
}