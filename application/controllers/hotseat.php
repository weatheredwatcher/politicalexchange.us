<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotseat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		
	}
	
	function head(){
		$head_id = $this->uri->segment(3);
		echo $head_id;
		echo '<div id="broadcasterContent" style="width:760px;height:455px;">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="utv596796">
		<param name="flashvars" value="sid=25b0346fed2ad640406b8a207812ec06&cid=25993%2Ftest'.$head_id.'"/>
		<param name="allowfullscreen" value="true"/>
		<param name="allowscriptaccess" value="always"/>
		<param name="movie" value="http://www.ustream.tv/flash/broadcaster.swf?r=api&v=5"/>
		<embed flashvars="sid=25b0346fed2ad640406b8a207812ec06&cid=25993%2Ftest'.$head_id.'" width="100%" height="100%" 
		allowfullscreen="true" allowscriptaccess="always" id="utv596796" name="utv_n_193018" 
		src="http://www.ustream.tv/flash/broadcaster.swf?r=api&v=5" type="application/x-shockwave-flash" />
		</object>
		</div>
		<script type="text/javascript">
		function resize(w,h){
			if ( w > 0 ){document.getElementById("broadcasterContent").style.width = w + "px";}if ( h > 0 ){
				document.getElementById("broadcasterContent").style.height = h + "px";}return true;}
				</script>';
		
		
		
	}
	
	function view()
	{
		$this->load->view('hotseat/view');
	}
	
	function demo()
	{
		
		$this->load->view('hotseat/demo');
		
	}
}