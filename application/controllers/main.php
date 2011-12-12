<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//loads the phpQuery Libraries
require_once 'phpQuery/phpQuery/phpQuery.php';

class Main extends CI_Controller {

	/**
	 This is the main controller. IT handles the locator data as well as all the user interactions
	 @author David Duggins
	 @package politicalexchange
	 */
	public function index()
	{
	    //here we pull the address in from the locator form
	     
	    $data['address'] = urlencode($this->input->post('address'));
		$data['city'] = urlencode($this->input->post('city'));
		$data['state'] = urlencode(strtoupper($this->input->post('state')));
		$data['zip'] = urlencode($this->input->post('zip'));

 //pulling in the local politicians via anonymous function

$city = $data['city'];
$this->load->model('profile_model');	
$query = $this->db->query("SELECT * FROM politicians WHERE locationID='$city'");
$data['politicians'] = $query->result();
 //defining the locator callback    
 $data['locator'] = function($browser) {

      

    foreach($browser['#poll_finder'] as $location) {
      
      $hours = pq($location)->find('p:nth-child(5)')->getStrings();
      $address = pq($location)->find('p:nth-child(4)')->getStrings();
	  $name = pq($location)->find('p:nth-child(3)')->getStrings();
	
	  $display_hours = ltrim($hours[0],  'Polling Place Hours:');
	  $display_address = ltrim($address[0],  'Address:');
	  $display_name = ltrim($name[0],  'Name:');
	  
	  echo $display_name . '<br />';
	  echo $display_address . '<br />';
	  echo $display_hours . '<br />';

    }
    
      
  };

		
		
		
		$this->load->view('main_page', $data);
		//$this->load->view('coming_soon', $data);
	}
	
	
	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */