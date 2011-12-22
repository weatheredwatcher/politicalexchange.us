<DOCTYPE! html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>
<?=link_tag('stylesheets/styles.css');?>
<?=link_tag('javascript/fancybox/jquery.fancybox-1.3.4.css');?>

<script src="http://www.politicalexchange.us/javascript/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://www.politicalexchange.us/javascript/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript" charset="utf-8"></script>

    
    <script type="text/javascript" charset="utf-8">
        window.onload = function () {
            var container = $('div.sliderGallery');
            var ul = $('ul', container);
            
            var itemsWidth = ul.innerWidth() - container.outerWidth();
            
            $('.slider', container).slider({
                min: 0,
                max: itemsWidth,
                handle: '.handle',
                stop: function (event, ui) {
                    ul.animate({'left' : ui.value * -1}, 500);
                },
                slide: function (event, ui) {
                    ul.css('left', ui.value * -1);
                }
            });
        };
    </script>

<!-- THIS SCRIPT IS FOR THE ADVERTISEMENT -->
<script type="text/javascript">

$(document).ready(function() {

	//Set Default State of each portfolio piece
	//$(".paging").show();
	//$(".paging a:first").addClass("active");
		
	//Get size of images, how many there are, then determin the size of the image reel.
	var imageWidth = $(".window").width();
	var imageSum = $(".image_reel img").size();
	var imageReelWidth = imageWidth * imageSum;
	
	//Adjust the image reel to its new size
	$(".image_reel").css({'width' : imageReelWidth});
	
	//Paging + Slider Function
	rotate = function(){	
		var triggerID = $active.attr("rel") - 1; //Get number of times to slide
		var image_reelPosition = triggerID * imageWidth; //Determines the distance the image reel needs to slide

		$(".paging a").removeClass('active'); //Remove all active class
		$active.addClass('active'); //Add active class (the $active is declared in the rotateSwitch function)
		
		//Slider Animation
		$(".image_reel").animate({ 
			left: -image_reelPosition
		}, 500 );
		
	}; 
	
	//Rotation + Timing Event
	rotateSwitch = function(){		
		play = setInterval(function(){ //Set timer - this will repeat itself every 3 seconds
			$active = $('.paging a.active').next();
			if ( $active.length === 0) { //If paging reaches the end...
				$active = $('.paging a:first'); //go back to first
			}
			rotate(); //Trigger the paging and slider function
		}, 3000); //Timer speed in milliseconds (3 seconds)
	};
	
	rotateSwitch(); //Run function on launch
	
	//On Hover
	$(".image_reel a").hover(function() {
		clearInterval(play); //Stop the rotation
	}, function() {
		rotateSwitch(); //Resume rotation
	});	
	
	//On Click
	$(".paging a").click(function() {	
		$active = $(this); //Activate the clicked paging
		//Reset Timer
		clearInterval(play); //Stop the rotation
		rotate(); //Trigger rotation immediately
		rotateSwitch(); // Resume rotation
		return false; //Prevent browser jump to link anchor
	});	
	
});
</script>


</head>

<body id="sub">
<!-- Starting the Upper Half - - Blue Area -->

<div id="flagInside"></div>

<div id="wrapperInside">

<div id="contentwrapInside">
	
<?php
$image_properties = array(
          'src' => 'images/logo-icon.png',
          'alt' => 'Political Exchange',
          'width' => '84',
          'height' => '56'
);
?>
    	<div id="logoInside"><?=img($image_properties); ?>
           <div id="politician"> <?=$this->load->view('_topmenu'); ?></div>
        
        </div>
       
		
        <div id="columnwrap">
          <div id="colLeftFull">
       	    <div id="contentColLeft">
            		<div id="broadcasterContent" style="width:760px;height:455px;" align="center">
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="utv596796">
					<param name="flashvars" value="sid=25b0346fed2ad640406b8a207812ec06&cid=25993%2Ftest<?=$head_id;?>"/>
					<param name="allowfullscreen" value="true"/>
					<param name="allowscriptaccess" value="always"/>
					<param name="movie" value="http://www.ustream.tv/flash/broadcaster.swf?r=api&v=5"/>
					<embed flashvars="sid=25b0346fed2ad640406b8a207812ec06&cid=25993%2Ftest<?=$head_id;?>" width="100%" height="100%" 
					allowfullscreen="true" allowscriptaccess="always" id="utv596796" name="utv_n_193018" 
					src="http://www.ustream.tv/flash/broadcaster.swf?r=api&v=5" type="application/x-shockwave-flash" />
					</object>
					</div>
					<script type="text/javascript">
					function resize(w,h){
						if ( w > 0 ){document.getElementById("broadcasterContent").style.width = w + "px";}if ( h > 0 ){
							document.getElementById("broadcasterContent").style.height = h + "px";}return true;}
							</script>
			
       	      
       	    </div>
        
  </div>






</div>
<div id="clear"></div>




</div>
<div id="bottomAds"><img src="../../images/ad1.png" width="24%" height="218" alt="Advertisement"> <img src="../../images/ad2.png" width="24%" height="218" alt="Advertisement"> <img src="../../images/ad3.png" width="24%" height="218" alt="Advertisement"> <img src="../../images/ad3.png" width="24%" height="218" alt="Advertisement" style="padding-right:0px;"></div>
<?=$this->load->view('_footer');?>


</div>

<!-- End Blue  -->

<script type="text/javascript" src="../nivo-slider/demo/scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>
