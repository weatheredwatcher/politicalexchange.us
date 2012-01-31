<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>

<?=link_tag('stylesheets/styles.css');?>
<?=link_tag('javascript/fancybox/jquery.fancybox-1.3.4.css');?>

<!-- updated to jQ 1.2.6 and UI 1.5.2 2008-11-28 -->
    <script src="http://www.politicalexchange.us/javascript/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
   <script src="http://www.politicalexchange.us/javascript/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
   
   
   <script src="http://www.politicalexchange.us/javascript/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

	
	$(document).ready(function() {

		/* This is basic - uses default settings */

		$(".fancybox").fancybox();

		navigator.geolocation.getCurrentPosition(function(position) {
		    var lat = position.coords.latitude;
			var lon = position.coords.longitude;
			
			var href = "http://openstates.org/api/v1/legislators/geo/?long=" + lon + "&lat=" + lat + "&apikey=329d4c2fe0c246f4b5e4f0a509830479";
			var fed_href = "http://services.sunlightlabs.com/api/legislators.allForLatLong.json?latitude=" + lat + "&longitude=" + lon +"&apikey=329d4c2fe0c246f4b5e4f0a509830479"
			
			$.cookie('state_json', href, { expires: 7, path: '/' });
			$.cookie('federal_json', fed_href, { expires: 7, path: '/' });
			
			
		});
		


	});
	
	function form_onBlur(){
		
	var myString = $('input[name=city]').val();
		
		switch (myString) {

		case "Columbia": 
		    var myCounty = prompt ("Please enter your County:");
		    
		    $('#county').val(myCounty);
		    break;
        case "Charleston":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "Fountain Inn":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "Greer":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "Honea Path":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "Irmo":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "North Charleston":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "North Augusta":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "Summerville":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "Ware Shoals":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;
        case "Yemassee":
		var myCounty = prompt ("Please enter your County:");
	    
	    $('#county').val(myCounty);
	    break;

		}
	}
	
	//this script pulls the geolocation data via the browser and then loads it into a php call.
	
	
</script>

</head>

<body>
	<!-- Here is the code for talking heads video -->
	<script type="text/javascript" src="http://www.politicalexchange.us/wthvideo/wthvideo.js"></script>
	<!-- End of Talking Heads -->
<!-- Starting the Upper Half - - Blue Area -->
<div id="black">
<div id="flag"></div>

<div id="wrapper">

<div id="contentwrap">
	
    <div id="stars">
    	<div id="logo">
			<div id="politician">
				
				<ul>
				<li><?=anchor('admin', 'My Account');?></li>
				<li>  <?=anchor('candidate', 'Candidates');?></li>
				<li>  <?=anchor('contact', 'Contact Us');?></li>
				<li>  <?=anchor('about', 'About Us');?></li>
				<li>  <?=anchor('hotseat', 'HotSeat');?></li>
				<li>  <?=anchor('docs', 'Help');?></li>
				</ul>
			</div>
			<?= img("images/logo.png");?></div>
    	<div id="location" >
        <?=img("images/location.png");?>
<?php 


$address = array(
              'name'        => 'address',
              'class'          => 'home',
              'value'       => 'address',
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$city = array(
              'name'        => 'city',
              'class'          => 'home',
              'value'       => 'city',
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onBlur'     => 'form_onBlur()'
               );


$state = array(
              'name'        => 'state',
              'class'          => 'home',
              'value'       => 'state',
              'maxlength'   => '2',
              'size'        => '2',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );

$county = array(
              'name'        => 'county',
              'id'          => 'county',
              'value'       => 'county'
              
               );
			   
$state_json = array(
              'name'        => 'state_json',
              'id'          => 'state_json',
              'value'       => 'state_json'
              
               );



$zip = array(
              'name'        => 'zip',
              'class'          => 'home',
              'value'       => 'zip',
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );
               
$submit = array(
    'name' => 'button',
    'class' => 'go',
    'value' => 'true',
    'type' => 'submit'
);


echo form_open('main');
echo form_input($address);
echo form_input($city);
echo form_hidden($county);
echo form_hidden($state_json);
echo form_input($state);
echo form_input($zip);
echo form_button($submit);
echo form_close();

 ?>
           
                            
              
                               	</div>
    
        
        
    
    
    </div>


</div>

</div>
</div>

<!-- End Blue  -->

<!-- Starting the lower half (Blue AREA) -->
<div id="clear"></div>
<div id="bottom">

<div id="bottomwrap">

  	 <div id="videos">
	   <div id="featured"><img src="http://www.politicalexchange.us/images/featured-hot.png" width="407" height="202" alt="Hot Seat" />
		<a href="/hotseat/hotseat_about"><img src="http://www.politicalexchange.us/images/hotseat-button.png" width="169" height="72" alt="Hot Seat" style="margin-top:60px;float:right;" /></a>
	   </div>
	  </div>
	</div>
<div id="clear"></div>
</div>

<?php echo $this->load->view('_footer'); ?>
</body>
</html>
