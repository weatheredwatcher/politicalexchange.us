<DOCTYPE! html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>
<?=link_tag('stylesheets/styles.css');?>
<?=link_tag('javascript/fancybox/jquery.fancybox-1.3.4.css');?>

<!-- updated to jQ 1.2.6 and UI 1.5.2 2008-11-28 -->
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

		$(document).ready(function() {

			/* This is basic - uses default settings */

			$(".fancybox").fancybox();



		});
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
	<!-- Here is the code for talking heads video -->
	<script type="text/javascript" src="http://www.politicalexchange.us/wthvideo/wthvideo4.js"></script>
	<!-- End of Talking Heads -->
<!-- Starting the Upper Half - - Blue Area -->

<div id="flagInside"></div>

<div id="wrapperInside">

<div id="contentwrapInside">
	

    	<div id="logoInside">
           <div id="politician">
        <?=$this->load->view('_topmenu');?></div>
        </div>
   
		
    <div id="columnwrap">
    
    
   		  <div id="colRight">
   		  		
				<div id="ads">
			         <img src="images/ad2.png" alt="" width="280" />
			         <img src="images/ad3.png" alt="" width="280" />
			         <img src="images/ad1.png" alt="" width="280" />
			    </div>

   		  </div>
                
    
        
             
   			 <div id="colLeft">
           	   <div id="contentColLeft">
           	   	<div id="topProfile">
               	  <h2> About Us </h2>
                  
				<div id="representatives">
						<p>The idea for PX began during a local Sheriff’s race in South Carolina in the Summer of 2009. 
						One candidate had the desire to connect with every eligible voter, but due to an ever-growing 
						electorate, the ability to reach each voter depended largely on the size of a campaign account. 
						This candidate realized the potential of internet and social media for affordably connecting a 
						candidate to his or her constituency, thus leveling the “playing field” and allowing every voter 
						to truly know candidates running for public office. </p>
						<p>That idea was shared with a few close friends, all of whom steadfastly believe in real political 
						transparency. After almost two years of hard work and planning, the idea became reality. Political 
						Exchange is now the only place every candidate in every race in America can go to directly connect 
						with every voter. PX is also the only place voters can go to truly see who the candidates are and 
						what they really believe. </p>

						<p>FAMILY:	We at Political Exchange have a strong belief in family. Family is at the very Core of 
						our Country. Most of us have already begun building families of our own. Our workplace environment 
						is structured so that we provide premium customer service to every candidate or constituent member, 
						as well as strengthen and nurture every employee’s own family. We think of each other as family and 
						treat each other as such. We gladly extend an open invitation, into the PX family, to everyone who 
						desires and demands truth and freedom of ideas in the political process of Our Republic.</p>   
			
					<div id="clear"> </div>
					</div>
                </div>

               	 <div id="divide"></div>
                <div id="clear"></div>
                <div id="middleProfile">



               </div>

           	   </div>
        
  </div>






</div>
<div id="clear"></div>
</div>

<div id="clear"></div>

 <?php echo $this->load->view('_footer'); ?></div>



<!-- End Blue  -->


</body>
</html>

