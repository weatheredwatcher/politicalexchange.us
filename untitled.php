<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>
<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" />
<script src="javascript/jquery.js" type="text/javascript"> </script>
<script src="javascript/jquery.cj-image-video-previewer.js" type="text/javascript"> </script>

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

    	<div id="logo">
          <div id="politician"> <ul>
    <li><a href="#">Login </a></li>
    <li>  <a href="#">Are you a Politician? </a></li>
    </ul></div>
        
        <img src="images/logo.png"  alt="Political Exchange" /></div>
    	<div id="location" >
        <img src="images/location.png" width="118" height="27" alt="Enter Your Location" style="margin-bottom:5px;"/>
<form>
           
              <input type="text" value="address" id="home" /> 
              
              
              <input type="text" value="city" id="home" /> 
              
              <input type="text" value="state" id="home" /> 
              
            <input type="text" value="zip" id="home" />
              <input type="button" class="go" />
            </input>
           
        	</form>
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
   <div id="featured"><img src="images/featured-hot.png" width="407" height="202" alt="Hot Seat" /><img src="images/hotseat-button.png" width="169" height="72" alt="Hot Seat" style="margin-top:60px;float:right;" />
   </div>
  </div>
</div>
<div id="clear"></div>

</div>


<div id="footer"> Footer Information</div>
</body>
</html>