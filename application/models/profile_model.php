<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
		
	function insert_profile()
	{
	
//here we are defining the model for the politicians profile
	    
		$this->login = $this->input->post('login');
		$this->name = $this->input->post('name');
		$this->email = $this->input->post('email');
		$this->password = md5($this->input->post('password'));
		if($_FILES['userfile']['error'] == 0){
			 $relative_url = 'uploads/'.$this->upload->file_name;
			 $this->avatar_id = $relative_url;
		 }
		//$this->avatar_id = $this->input->post('avatar_id');
		$this->campaign_name = $this->input->post('campaign_name');
		$this->twitter = $this->input->post('twitter');
		$this->facebook = $this->input->post('facebook');
		$this->youtube_channel = $this->input->post('youtube_channel');
		$this->address1 = $this->input->post('address1');
		$this->address2 = $this->input->post('address2');
		$this->city = $this->input->post('city');
		$this->state = $this->input->post('state');
		$this->zip = $this->input->post('zip');
		$this->phone = $this->input->post('phone');
		$this->fax = $this->input->post('fax');
		$this->website_url = $this->input->post('website_url');
		$this->about_me = $this->input->post('about_me');
		$this->party_affiliation = $this->input->post('party_affiliation');
		$this->running_for = $this->input->post('running_for');
		$this->currently_in_office = $this->input->post('currently_in_office');
		$this->confirmed = 0;   //confirmed status requires campaign documents to be on file
		$this->active = 0;      //active status requires payment to be current
		
		$this->db->insert('profiles', $this);
		
		set_cookie('email', $this->email);
	}
	
	function update_profile()
	{
	
//here we are defining the model for the politicians profile
	
		$this->login = $this->input->post('login');
		$this->name = $this->input->post('name');
		$this->email = $this->input->post('email');
		//check if password is changed
		if($this->input->post('password') != ""):
		$this->password = $this->input->post('password');
	    endif;
		//check if avatar has changed
		if ($this->input->post('avatar_id') != ""):
			 $relative_url = 'uploads/'.$this->upload->file_name;
			 $this->avatar_id = $relative_url;
		
		 endif;
		$this->campaign_name = $this->input->post('campaign_name');
		$this->twitter = $this->input->post('twitter');
		$this->facebook = $this->input->post('facebook');
		$this->youtube_channel = $this->input->post('youtube_channel');
		
		$this->address1 = $this->input->post('address1');
		$this->address2 = $this->input->post('address2');
		$this->city = $this->input->post('city');
		$this->state = $this->input->post('state');
		$this->zip = $this->input->post('zip');
		$this->phone = $this->input->post('phone');
		$this->fax = $this->input->post('fax');
		$this->website_url = $this->input->post('website_url');
		$this->about_me = $this->input->post('about_me');
		$this->party_affiliation = $this->input->post('party_affiliation');
		$this->running_for = $this->input->post('running_for');
		$this->currently_in_office = $this->input->post('currently_in_office');
		$this->confirmed = 0;   //confirmed status requires campaign documents to be on file
		$this->active = 0;      //active status requires payment to be current
		
		
        $this->db->update('profiles', $this, array('id' => $this->input->post('id')));
		
	}
	
	function get_profile($id)
	{
		$this->id = $id;
		$query = $this->db->get_where('profiles', array('id' => $this->id));
	    return $query->result();
	
	}
	function auth(){
		$this->login = $this->input->post('login');
		$this->password = $this->input->post('password');
		$query = $this->db->get_where('profiles', array('login' => $this->login));
		foreach ($query->result() as $row)
		{
		    if ($row->password == $this->password) {
			//this is where we set the session data to logged in
			$loguser = array(
				               'id'        => $row->id,
			                   'username'  => $this->login,
							   'name'      => $row->name,
			                   'email'     => $row->email,
			                   'logged_in' => TRUE
			               );

			$this->session->set_userdata($loguser);
			/*
				TODO save session data, ip and date in the profile model.
			*/
			}else {
				   //this is where we redirect back to the login page
				redirect('profile/login', location);
				  }
		}
		
	}
	
}