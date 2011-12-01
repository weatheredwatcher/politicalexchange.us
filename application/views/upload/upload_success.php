<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>
<link href="http://www.politicalexchange.us/stylesheets/styles.css" rel="stylesheet" type="text/css" />
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
    	<div id="logo"><img src="http://www.politicalexchange.us/images/logo.png"  alt="Political Exchange" /><br />
    	
    	</div>
    	<div id="location" >
     		<?php echo $error;?>

			
			<h1 style="color:#FFFFFF; font-family:Tahoma, Geneva, sans-serif;font-weight:normal;margin-bottom:3px;">Your File Was Successfully Uploaded!</h1>
			<p style="color:#FFFFFF; font-family:Tahoma, Geneva, sans-serif;font-weight:normal;margin-bottom:3px;">Please wait for instructions on how to confirm your campaign account.</p>
			<br /><br />

			
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
