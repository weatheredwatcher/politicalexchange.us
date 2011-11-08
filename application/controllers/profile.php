<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		
	
			$data['query'] = $this->db->get('profiles');
			$this->load->model('profile_model');
			$this->load->view('profile/profile_index', $data);
			
	}
	
	function create(){
		
	
		
		
		$this->load->view('profile/profile_new');
	}
	
	function insert_profile(){
	    
		$this->load->model('profile_model');
		$this->profile_model->insert_profile(); 
		//$this->db->insert('profiles', $this->input->post());
		redirect('profile', 'location');
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