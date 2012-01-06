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
	    $this->load->helper('inflector'); 
	    $data['address'] = urlencode($this->input->post('address'));
		$data['city'] = urlencode($this->input->post('city'));
		$data['state'] = urlencode(strtoupper($this->input->post('state')));
		$data['zip'] = urlencode($this->input->post('zip'));
        $county = urlencode($this->input->post('county'));

		//gonna pull some json magic here
		
		$request_state = $this->input->cookie('state_json');
        $request_fed = $this->input->cookie('federal_json');
		$json_state = file_get_contents($request_state, true); //getting the file content
		$json_fed = file_get_contents($request_fed); //getting the file content

		$data['state_json'] = json_decode($json_state);
		$data['fed_json'] = json_decode($json_fed);

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
    $sql = "SELECT * FROM state_senate WHERE MATCH (represents) AGAINST ('+\"$city\"' in boolean mode)";
    $senate_level = $this->db->query($sql) or die('error');
 	$data['senate'] = $senate_level->result();

    //$state_rep = $this->db->query("SELECT reps FROM cities  WHERE name = '$city'");
	//$data['reps'] = $state_rep->result(); 

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
	
	public function sandbox()
	{
        $request_fed = "http://services.sunlightlabs.com/api/legislators.allForLatLong.json?latitude=34.0322176&longitude=-81.0297101&apikey=329d4c2fe0c246f4b5e4f0a509830479";
		
       
		$json_fed = file_get_contents($request_fed); //getting the file content
		$fed_json = json_decode($json_fed);
		foreach($fed_json as $key => $content):
			foreach($content as $key2 => $response):
			
			foreach($response as $key3 => $legislators):
				$image_src = "http://www.opencongress.org/images/photos/thumbs_125/".$legislators->legislator->govtrack_id.".jpeg";
				$youtube_channel = basename($legislators->legislator->youtube_url);
				echo img($image_src).'<br />';
			    echo $legislators->legislator->firstname.' '.$legislators->legislator->lastname;
				echo '<script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel='.$youtube_channel.'&synd=open&w=320&h=390&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>';
				echo '<hr />';	
			endforeach;
		endforeach;
				
			
		endforeach;
		
		
}
	
	
	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */