<DOCTYPE! html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>
<?php echo('<link href="'.base_url().'stylesheets/styles.css" rel="stylesheet" type="text/css" />'); 

		

?>


<!-- updated to jQ 1.2.6 and UI 1.5.2 2008-11-28 -->
    <script src="javascript/jquery-1.2.6.js" type="text/javascript" charset="utf-8"></script>

    <script src="javascript/jquery-ui-full-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
    
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
	

    	<div id="logoInside">
			<div id="politician"> <ul>
	    <li><a href="#">Login </a></li>
	    <li>  <a href="#">Are you a Politician? </a></li>
	    </ul></div>
			<img src="<?php echo base_url();?>images/logo-icon.png"  alt="Political Exchange" width="84" height="56" /></div>
   
		
        <div id="columnwrap">
      		 <div id="colRight">
             	<div id="contentColRight">


<div class="main_view">
    <div class="window">
        <div class="image_reel">
            <a href="#"><img src="<?php echo base_url();?>images/ad2.png" alt="" /></a>
            <a href="#"><img src="<?php echo base_url();?>images/ad3.png" alt="" /></a>
            <a href="#"><img src="<?php echo base_url();?>images/ad1.png" alt="" /></a>
       
        </div>
    </div>
    <div class="paging">
        <a href="#" rel="1"></a>
        <a href="#" rel="2"></a>
        <a href="#" rel="3"></a>

    </div>
</div>


                  <p></p><h2> Poll Locator </h2>
                  <?php 
                  
					phpQuery::browserGet('http://www.vote411.org/pollfinder.php?address='.$address.'&address2=&city='.$city.'&state='.$state.'&zipcode='.$zip.'',$locator);	

						
                   
                   ?>
                  <hr />
                
                
                </div>
             </div>
             
   			 <div id="colLeft">
             	<div id="contentColLeft"> 
                
                <div id="topProfile">
               	  <h2> Your Representatives </h2>
                  <hr />
                  <table  border="0" width="100%">
  <tr>
    <td><img src="<?php echo base_url();?>images/rep1.png" width="219" height="143" /></td>
    <td><a class='example5' href="profile.html" title="Jim DeMint"><img src="<?php echo base_url();?>images/rep2.png" width="238" height="143" alt="example3" />	</a></td>
    <td><img src="<?php echo base_url();?>images/rep3.png" width="180" height="143" alt="rep" /></td>
  </tr>
  <tr>
    <td>Senator: Lindsey Graham</td>
    <td>Senator: Jim DeMint</td>
    <td>Governor: Nikki Haley</td>
  </tr>
</table>
                </div>
                
               	 <div id="divide"></div>
                
                <div id="middleProfile">
               	  <h2> Local Campaigns </h2>
                  <hr />
                    
                    
                    
              <div align="center" >     
         <div class="sliderGallery">
            <ul>
                
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" /></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128"/></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>

                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128"/></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128"/></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>

                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>                    
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>

                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign2.png" width="94" height="128" /></li>
                <li><img src="<?php echo base_url();?>images/campaign1.png" width="94" height="128" /></li>                    
            </ul>
          
            <div class="slider">
                <div class="handle"></div>
             <!-- <span class="slider-lbl1">Wi-Fi</span>
                <span class="slider-lbl3">Macs</span>
                <span class="slider-lbl4">Applications</span>
                <span class="slider-lbl5">Servers</span>
            </div> -->
         
        </div>
        </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
              
                
                
                </div>
                	
          			
               </div>
  		</div>
        
  </div>






</div>
</div>
</div>

<!-- End Blue  -->



</body>
</html>
