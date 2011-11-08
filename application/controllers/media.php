<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		if ($this->session->userdata('logged_in') == FALSE)
		{
		     redirect('/profile/login/', 'refresh');
		}
		
		$this->load->view('media/media_index');
	}
}