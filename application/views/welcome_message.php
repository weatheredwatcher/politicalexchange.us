<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>

<?=link_tag('stylesheets/styles.css');?>
<?=link_tag('javascript/fancybox/jquery.fancybox-1.3.4.css');?>

<!-- updated to jQ 1.2.6 and UI 1.5.2 2008-11-28 -->
    <script src="http://www.politicalexchange.us/javascript/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
   
   <script src="http://www.politicalexchange.us/javascript/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

	
	$(document).ready(function() {

		/* This is basic - uses default settings */

		$(".fancybox").fancybox();



	});
	
	function form_onBlur(){
		
	var myString = $('input[name=city]').val();
		
		switch (myString) {

		case "Columbia"://, "Charleston", "FountainInn", "Greer", "Honea Path", "Irmo", "North Charleston", "North Augusta", "Summerville", "Ware Shoals", "Yemassee":
		    var myCounty = prompt ("Please enter your County:");
		    
		    $('input:hidden').val(myCounty);
		    break;


		}
	}
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
				<li><?=anchor('acount', 'My Account');?></li>
				<li>  <?=anchor('candidate', 'Candidates');?></li>
				<li>  <?=anchor('contact', 'Contact Us');?></li>
				<li>  <?=anchor('about', 'About Us');?></li>
				<li>  <?=anchor('hotseat', 'HotSeat');?></li>
				</ul>
			</div>
			<?= img("images/logo.png");?></div>
    	<div id="location" >
        <?=img("images/location.png");?>
<?php 


$address = array(
              'name'        => 'address',
              'id'          => 'home',
              'value'       => 'address',
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$city = array(
              'name'        => 'city',
              'id'          => 'home',
              'value'       => 'city',
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onBlur'     => 'form_onBlur()'
               );

$county = array(
			   'name'        => 'county',
               'id'          => 'home',
		       'value'       => 'county',
                );
$state = array(
              'name'        => 'state',
              'id'          => 'home',
              'value'       => 'state',
              'maxlength'   => '2',
              'size'        => '2',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$zip = array(
              'name'        => 'zip',
              'id'          => 'home',
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
