<?php

$image_properties = array(
          'src' => 'images/logo-icon.png',
          'alt' => 'Political Exchange',
          'width' => '84',
          'height' => '56'
         );
?>


    	<div id="logoInside">
         
        
<a href="/home"><img src="http://politicalexchange.us/images/logo-icon.png" alt="Political Exchange" width="84" height="56"/></a>


 <div id="politician">

<div id="menu">
		<ul>
		<li>  <?=anchor('admin', 'My Account');?>
    	<ul>
        <li><a href="#">Login</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Questions</a></li>
        <li><a href="#">Hotseat</a></li>
        </ul>
		</li>
		<li>  <?=anchor('candidate', 'Candidates');?></li>
		<li>  <?=anchor('contact', 'Contact Us');?></li>
		<li>  <?=anchor('about', 'About Us');?></li>
		<li>  <?=anchor('hotseat', 'HotSeat');?></li>
		<li>  <?=anchor('help', 'Help');?></li>
		</ul>
	
		</div>




</div></div>
