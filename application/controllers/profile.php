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
	
	function view()
	{
		$this->load->helper('inflector');
		
		$profile_id = $this->uri->segment(3);
		if($profile_id < 1000):
			$this->load->model('profile_model', 'profiles');
			$query = $this->db->query("SELECT * FROM profiles WHERE id='$profile_id'");
		 	$data['results'] = $query->result_array();
			
	else:
			$data['cookie'] = (urldecode($profile_id));
			$data['name'] = urldecode($profile_id);
			$data['avatar'] = "images/avatar.png";
		    
			
		endif;
		$this->load->view('profile/profile_view', $data);
		
	}
	
	function create(){
		
	
		
		
		$this->load->view('profile/profile_new');
	}
	
	function insert_profile(){
	    
		$this->load->model('profile_model');
		
			    //upload and update the file
			    $config['upload_path'] = './uploads/';
			    $config['allowed_types'] = 'gif|jpg|png';
			    $config['overwrite'] = false;
			    $config['remove_spaces'] = true;
			    $config['max_size']   = '1000';// in KB
				$this->upload->initialize($config);
			
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('profile/profile_errors', $error);
				}
				//TODO: Need to add some image handling..resizing and or cropping.  Invoke image helpers as well as JS for this.
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$filename = $this->upload->data('file_name');
				
					//$this->load->model('resources_model');
				
					//$where = get_cookie('email');
					//$this->db->insert_string('resources', $data);
				    $this->profile_model->insert_profile(); 
					$this->load->library('email');

					$this->email->from('mailer@politicalexchange.us', 'Political Exchange');
					$this->email->to('weatheredwatcher@gmail.com');
					
					$this->email->subject('Email Test');
					$this->email->message('Testing the email class.');

					$this->email->send();
					$this->load->view('upload/upload_success', $data);
				}
			
			
			
			
			
			
			
			
			
		
		
		
	}
	
	function update(){
		//this is the session login validation block
		//it must be listed first for each secure page in the controller
		
			$this->load->model('Profile_model', 'profile');
			 $this->profile->update_profile(); 
	
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