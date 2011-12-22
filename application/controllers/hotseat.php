<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotseat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		$this->load->view('hotseat/hotseat_index');	
	}
	
	function head(){
		$data['head_id'] = $this->uri->segment(3);
		
	$this->load->view('hotseat/head', $data);
		
		
	}
	
	function view()
	{
		$this->load->view('hotseat/view');
	}
	
	function demo()
	{
		
		$this->load->view('hotseat/hotseat_index');
		
	}
	
	function hotseat_about()
	{
		
		$this->load->view('hotseat/hotseat_main.php');
	}
}