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



<!-- FOR NIVO SLIDER -->

<link rel="stylesheet" href="../nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../nivo-slider/themes/pascal/pascal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../nivo-slider/themes/orman/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../nivo-slider/nivo-slider.css" type="text/css" media="screen" />


</head>

<body id="sub">
	<!-- Here is the code for talking heads video -->
	<script type="text/javascript" src="http://www.politicalexchange.us/wthvideo/wthvideo2.js"></script>
	<!-- End of Talking Heads -->
<!-- Starting the Upper Half - - Blue Area -->

<div id="flagInside"></div>

<div id="wrapperInside">

<div id="contentwrapInside">
	

    	<div id="logoInside"><img src="../images/logo-icon.png"  alt="Political Exchange" width="84" height="56" />
           <div id="politician"> <?=$this->load->view('_topmenu'); ?></div>
        
        </div>
        
        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="../images/banner1.jpg" alt="" width="1024" />
         
                <img src="../images/banner2.jpg" alt="" data-transition="slideInLeft" />
                <img src="../images/banner3.jpg" alt=""  />
            </div>
           <!-- <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>  -->
        </div>
   
		
        <div id="columnwrap">
          <div id="colLeftFull">
       	    <div id="contentColLeft">
            <div id="buttonsDemo"><p><img src="../images/hot-seat-demo.png" width="210" height="95"><img src="../images/hot-seat-schedule.png" width="297" height="99"></p></div>
       	      
              <div id="textRight">
              <h2>Welcome to the PX Hot Seat </h2>
       	      <p>the only place on the web to find live, one on one debates from the biggest names in politics. Click on the PX hot seat demo link at the bottom of the page to see a demo of the kind of excitement you can expect from The Political Exchange. </p>
       	      <p>Candidates are issuing challenges daily, so make sure to stay up to date on the debates for the races that matter to you!  As always, thank you for choosing The Political Exchange. </p>
              </div>
       	      
       	    </div>
        
  </div>






</div>
<div id="clear"></div>




</div>
<div id="bottomAds"><img src="../images/ad1.png" width="24%" height="218" alt="Advertisement"> <img src="../images/ad2.png" width="24%" height="218" alt="Advertisement"> <img src="../images/ad3.png" width="24%" height="218" alt="Advertisement"> <img src="../images/ad3.png" width="24%" height="218" alt="Advertisement" style="padding-right:0px;"></div>
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
