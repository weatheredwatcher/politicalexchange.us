<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corp extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
	  	redirect('home', 'refresh');
	}
	
	function privacy()
	{
	
		$this->load->view('corp/privacy');
		
	}
	
	function terms()
	{
		
		$this->load->view('corp/terms');
		
	}
	
	function about()
	{
		
		$this->load->view('corp/about');
		
	}
	
	funciton candidate()
	{
		
		$this->load->view('corp/candidate');
		
	}
}