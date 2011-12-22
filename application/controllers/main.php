<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//loads the phpQuery Libraries
require_once 'phpQuery/phpQuery/phpQuery.php';

class Main extends CI_Controller {

	/**
	 This is the main controller. It handles the locator data as well as all the user interactions
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
        $county = urlencode($this->input->post('county'));
 //pulling in the local politicians via anonymous function

$city = $data['city'];
$this->load->model('profile_model');	
$query = $this->db->query("SELECT * FROM city_level WHERE locationID='$city'");
$data['politicians'] = $query->result();
if ($county == "county"){
$query2 = $this->db->query("SELECT county FROM cities WHERE name='$city'");
//$start = $query2->result_array();
//$str = implode(",", $start);
//$data['counties'] = (explode(",", $str));
} 
	$county_query = $this->db->query("SELECT * FROM county_level WHERE county ='$county'");
    $data['county_level'] = $county_query->result();


 //defining the locator callback    
 $data['locator'] = function($browser) {

      

    foreach($browser['#poll_finder'] as $location) {
      
      $hours = pq($location)->find('p:nth-child(5)')->getStrings();
      $address = pq($location)->find('p:nth-child(4)')->getStrings();
	  $name = pq($location)->find('p:nth-child(3)')->getStrings();
	
	  $display_hours = ltrim($hours[0],  'Polling Place Hours:');
	  $display_address = ltrim($address[0],  'Address:');
	  $display_name = ltrim($name[0],  'Name:');
	  
	  
    echo ("<h2 align='center'> $display_name </h2>
	                    <p align='center'> $display_address <br />
	                    $display_hours </p>");



	
	 

    }
    
      
  };

		
		
		
		$this->load->view('main_page', $data);
		//$this->load->view('coming_soon', $data);
	}
	
	public function testor()
	{
		
		$city = "Columbia";
		$this->load->model('profile_model');	
		$query = $this->db->query("SELECT * FROM city_level WHERE locationID='$city'");
		$data['politicians'] = $query->result();
		$query2 = $this->db->query("SELECT county FROM cities WHERE name='$city'");

		$start = $query2->result_array();
		print_r ($start);
		$str = implode(",", $start);
		print_r ($str);
		$counties = (explode(",", $str));
		
		foreach($counties as $county){
			echo ("<h2>$county</h2>");
		}
	}
	
	
	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */