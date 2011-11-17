<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>

<?php echo('<link href="'.base_url().'stylesheets/styles.css" rel="stylesheet" type="text/css" />'); ?>
<script src="<?=base_url()?>javascript/jquery.js" type="text/javascript"> </script>
<script src="<?=base_url()?>javascript/jquery.cj-image-video-previewer.js" type="text/javascript"> </script>

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
	
	function form_onClick(){
	
	   
	
	}
</script>

</head>

<body>
<!-- Starting the Upper Half - - Blue Area -->
<div id="black">
<div id="flag"></div>

<div id="wrapper">

<div id="contentwrap">
	
    <div id="stars">
    	<div id="logo"><img src="images/logo.png"  alt="Political Exchange" /></div>
    	<div id="location" >
        <img src="images/location.png" width="118" height="27" alt="Enter Your Location" style="margin-bottom:5px;"/>
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
              'onFocus'     => 'form_onFocus()'
               );

$state = array(
              'name'        => 'state',
              'id'          => 'home',
              'value'       => 'state',
              'maxlength'   => '100',
              'size'        => '50',
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
   <div id="featured"> <img src="images/featured.png" alt="Featured Video" width="169" height="22" /></div>
<div id="videobox1">
  <div id="shadowtop"></div>
    	<div id="video"><div id="preview_01" class="thumbnail"><img src="images/video1.png" width="205" height="114" alt="Video" /></div></div>
    <div id="shadowbottom"></div>
  </div>
    
    <div id="videobox2">
      <div id="shadowtop"></div>
    	<div id="video"><img src="images/video1.png" width="205" height="114" alt="Video" /></div>
    <div id="shadowbottom"></div>
    </div>
        
    
    </div>
</div>
<div id="clear"></div>
</div>


</body>
</html>
