<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>
<link href="<?php base_url(); ?>stylesheets/styles.css" rel="stylesheet" type="text/css" />
<script src="<?php base_url(); ?>javascript/jquery.js" type="text/javascript"> </script>
<script src="<?php base_url(); ?>javascript/jquery.cj-image-video-previewer.js" type="text/javascript"> </script>

<script type="text/javascript">

$("#preview_01").cjImageVideoPreviewer({
// provide an array of your thumbnail images
"images": [
'images/obama1.png',
'images/obama2.png',
'images/obama3.png',
'images/obama4.png',
'images/obama5.png'

	],
	"delay": 100, // obviously this is a crazy fast amount
	"showProgress": false // turn off the progress bar
	});
</script>

</head>

<body>
<!-- Starting the Upper Half - - Blue Area -->
<div id="black">
<div id="flag"></div>

<div id="wrapper">

<div id="contentwrap">
	
    <div id="stars">
    	<div id="logo"><img src="images/logo.png"  alt="Political Exchange" /><br />
    	
    	</div>
    	<div id="location" ><!-- Begin MailChimp Signup Form -->
<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:transparent; clear:left; font:14px Helvetica,Arial,sans-serif;color: #FFFFFF;text-align:center;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
 <h2 style="color:#FFFFFF; font-family:Tahoma, Geneva, sans-serif;font-weight:normal;margin-bottom:3px;"> Your Polling Location is:</h2>
<form action="http://politicalexchange.us2.list-manage.com/subscribe/post?u=b975c4d16dbe8fcad821bb7f8&amp;id=3ab61eb48e" method="post"  name="mc-embedded-subscribe-form" class="validate" target="_blank">
	<p style="font-size:15px;font-weight: bold;margin-top:0px;">
		<?php 
          
			phpQuery::browserGet('http://www.vote411.org/pollfinder.php?address='.$address.'&address2=&city='.$city.'&state='.$state.'&zipcode='.$zip.'',$locator);	

				
           
           ?>
		<br />
	  We are currently in the process of updating information for your state!  Please give us your email address and we will send you updates as soon as more data is available!</p>
	<p align="center"><input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required></p>
	<div class="clear" align="center"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup--></div>
    
        
        
    
    
    </div>


</div>

</div>
</div>

<!-- End Blue  -->

<!-- Starting the lower half (Blue AREA) -->
<div id="clear"></div>
<div id="bottom">

<div id="bottomwrap"></div>
<div id="clear"></div>
</div>


</body>
</html>
