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
		//if(ctype_digit($profile_id)){
		//	$this->load->model('profile_model');
		//	$query = $this->db->query("SELECT * FROM profiles WHERE id='$profile_id'");
		//	$data['results'] = $query->result_array();
			
		//}else{
			$data['cookie'] = (urldecode($profile_id));
			$data['name'] = urldecode($profile_id);
			$data['avatar'] = "images/avatar.png";
		    
			
			//}
		$this->load->view('profile/profile_view', $data);
		
	}
	
	function create(){
		
	
		
		
		$this->load->view('profile/profile_new');
	}
	
	function insert_profile(){
	    
		$this->load->model('profile_model');
		
	
			$this->profile_model->insert_profile(); 
			
			redirect('/upload/', 'refresh');
		
		
		
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