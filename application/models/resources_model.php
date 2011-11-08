<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
		
		function insert_resource()
		{

	//here we are defining the model for the resources

			$this->type = $this->input->post('type');
			$this->profile_id = $this->input->post('profile_id');
			$this->path_to_image = $this->input->post('path_to_image');
			$this->is_avatar = 0;
			$this->upload_date = $this->date;
			

			$this->db->insert('resource', $this);

		}
}