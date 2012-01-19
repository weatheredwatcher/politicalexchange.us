<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package     auth
 * @subpackage  Libraries
 * @category    Authentication
 * @author      David Duggins (weatheredwatcher@gmail.com)
 * @copyright   Copyright (c) 2012, weatheredwatcher.com
 * @link 		http://joedesigns.com/labs/EasyAuth
*/

/**
 * Notes: Uses md5 for password encryption
 * You might need to adjust the query to suit your database structure
*/

class Auth {
	
	var $connected;
	var $user;
	
	function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->library('session');
		$this->CI->load->helper('url');
		$this->CI->load->database();
		$this->set();
		$this->check();
	}
	
	function clean($s){
		return $this->CI->db->escape($s);
	}
	
	function set(){
		if(isset($_POST['login']['username'])):
			$_SESSION['login']['username'] = $_POST['login']['username'];
		endif;
		if(isset($_POST['login']['password'])):
			$_SESSION['login']['password'] = brcypt($_POST['login']['password'], md5($_POST['login']['password']));
		endif;
	}
	
	function check(){
		
		
		
		if(isset($this->input->post('username') && isset($this->input->post('password'))):
			$chk = $this->db->query("
			select * 
			from profiles 
			where 
				login = ".$this->input->post('username')." and 
				password = ".$this->input->post('password')."
			limit 1
			");
			if($chk->num_rows() == 1):
				$this->user = $chk->result();
				$this->connected = true;
				$this->CI->session->set_userdata('username', $_SESSION['login']['username']);
				$this->CI->session->set_userdata('logged_in', true);
				return true;
			endif;
		endif;
		
    	if(isset($_SESSION['login'])):
		unset($_SESSION['login']);
		endif;
		
		return false;
		
	}
	
}
?>