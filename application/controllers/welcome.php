<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		//this is the main page that it viewed by the site.  
		//we have two pages currently defined for this controller.
		//welcome_message is the main page, containing the locator form
		//however, we also have a coming_soon view that bypasses the entire site structure 
		//to random strangers.
		
		
		

		//$this->load->view('coming_soon');
		$this->load->view('welcome_message');
	}
	
	public function politician(){
	
	
	$this->load->view('politician');

	
	
	
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */