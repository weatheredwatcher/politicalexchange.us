<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('bcrypt');
		//$this->load->library('auth');
	}
		
	function index()
	{ 
		$this->load->model('Profile_model', 'profile');
		if(isset($_POST['username']) && isset($_POST['password'])):
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = bcrypt($password, md5($password));
			$chk = $this->db->query("
			select * 
			from profiles  
			where 
				login = '".$username."' and 
				password = '".$password."'
			limit 1
			") or die (mysql_errno());
			if($chk->num_rows() == 1):
				//$this->user = $chk->result();
				foreach($chk->result() as $value):
					
					$this->session->set_userdata('id', $value->id);
					$this->session->set_userdata('full_name', $value->name);
				endforeach;
				//$this->session->set_userdata('username', $_SESSION['login']['username']);
				$this->session->set_userdata('logged_in', true);
				                                                                                        
			endif;
		endif;
		
		if($this->session->userdata('logged_in') == true):
			$id = $this->session->userdata('id');
			redirect('/admin/profile/'.$id, 'refresh');
		    
		else:
		
		    $this->load->view('admin/index_view');
	endif;
	}
	
	
	function profile()
	{
		if($this->session->userdata('logged_in') == true):
			$profile_id = $this->uri->segment(3);
		    
			$this->load->model('Profile_model', 'profile');
			$data['profile'] = $this->profile->get_profile($profile_id);
			$this->load->view('admin/profile_view', $data);
		
		else:
		
			redirect('/admin', 'refresh');
		
		endif;
		
		
		
	}
	
	function insert_page()
	{
		
		$this->load->model('Blog_model', 'blog');
		$this->blog->insert_entry();
		redirect('admin/manage', 'refresh');
		
		
	}
	
	function media()
	{
		
		//if($this->session->userdata('logged_in') == true):
		
		
			//$this->load->model('Blog_model', 'blog');
			//$data['entries'] = $this->blog->get_last_ten_entries();
			$this->load->view('admin/media_view', $data);

		     
		
	//	else:
		
	//		$this->load->view('admin/index_view');
		
	//	endif;
		
		
		
		
	}
	
	function hotseat()
	{
		
	//	if($this->session->userdata('logged_in') == true):
		
		
		     $this->load->view('admin/hotseat_view');
		
	//	else:
		
		//	$this->load->view('admin/index_view');
		
		//endif;
		
		
	}
	
	function questions()
	{
		//if($this->session->userdata('logged_in') == true):
		
		
		
			$this->load->view('admin/questions_view');
		     
		
	//	else:
		
		//	$this->load->view('admin/index_view');
			
	//	endif;
		
		
	}
	
	function logout()
	{
	$this->session->sess_destroy();
	
	redirect('/admin', 'refresh');
	
	}

}