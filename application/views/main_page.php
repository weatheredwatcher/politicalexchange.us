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
<!-- Starting the Upper Half - - Blue Area -->

<div id="flagInside"></div>

<div id="wrapperInside">

<div id="contentwrapInside">
	

    	<div id="logoInside">
        <?=$this->load->view('_topmenu');?>
        </div>
   
		
    <div id="columnwrap">
    
    
   		  <div id="colRight">
   		  		<div id="contentColRight">
					<p align="center"><img src="images/polling.png" width="78" height="80" alt="Polling">
							<?php phpQuery::browserGet('http://www.vote411.org/pollfinder.php?address='.$address.'&address2=&city='.$city.'&state='.$state.'&zipcode='.$zip.'',$locator); ?>
	
	
				</div> <!-- end contentColRight-->
				<div id="ads">
			         <img src="images/ad2.png" alt="" width="280" />
			         <img src="images/ad3.png" alt="" width="280" />
			         <img src="images/ad1.png" alt="" width="280" />
			    </div>

   		  </div>
                
    
        
             
   			 <div id="colLeft">
           	   <div id="contentColLeft">
           	   	<div id="topProfile">
               	  <h1> Your Representatives </h1>
                  <div id="divide"></div>
				<div id="representatives">
					<h2>City Level</h2>
				<ul class="avatar">
              <?php foreach($politicians as $row):?>
					<li>
				       <?=img('images/avatar.png');?><br />


					<?php $href="profile/view/".rawurlencode("$row->name"); ?>
					  <?=anchor($href, $row->name, array('class' => 'fancybox fancybox.iframe'));?><br />
					<?=$row->title?>
					</li>
					<?php endforeach;?>
					</ul>
					<div id="divide"></div>
					<h2>County Level</h2>
							<ul class="avatar">
			              <?php foreach($county_level as $row):?>
								<li>
							       <?=img('images/avatar.png');?><br />


								<?php $href="profile/view/".rawurlencode("$row->name"); ?>
								  <?=anchor($href, $row->name, array('class' => 'fancybox fancybox.iframe'));?><br />
								<?=$row->position?>
								</li>
								<?php endforeach;?>
								</ul>
								<div id="divide"></div>
								
								<h2>State Senate</h2>
										<ul class="avatar">
						              <?php foreach($senate as $row):?>
											<li>
										       <?=img('images/avatar.png');?><br />


											<?php $href="profile/view/".rawurlencode("$row->name"); ?>
											  <?=anchor($href, $row->name, array('class' => 'fancybox fancybox.iframe'));?><br />
											<?=$row->title?>
											</li>
											<?php endforeach;?>
											</ul>
											<div id="divide"></div>

											<h2>State House Of Representatives</h2>
													<ul class="avatar">
									              <?php foreach($reps as $row):?>
														<li>
													       <?=img('images/avatar.png');?><br />


														<?php $href="profile/view/".rawurlencode("$row->reps"); ?>
														  <?=anchor($href, $row->reps, array('class' => 'fancybox fancybox.iframe'));?><br />
														Representative
														</li>
														<?php endforeach;?>
														</ul>
														
														<div id="divide"></div>

														<h2>Federal Representatives</h2>
																<ul class="avatar">
																	<?php

																	$obama = array(
																	          'src' => 'images/Barack_Obama',
																	          'alt' => 'Political Exchange',
																	          'width' => '94',
																	          'height' => '127'
																	         );
																	
																	$biden = array(
																			   'src' => 'images/Joe_Biden',
																			    'alt' => 'Political Exchange',
																			    'width' => '94',
																			    'height' => '127'
																			     );
														    
											    					$graham = array(
																          'src' => 'images/Lindsey_Graham',
																          'alt' => 'Political Exchange',
																          'width' => '94',
																          'height' => '127'
																         );
																
																	$demint = array(
																          'src' => 'images/Jim_DeMint',
																          'alt' => 'Political Exchange',
																          'width' => '94',
																          'height' => '127'
																         );
																
																	$scott = array(
																          'src' => 'images/Tim_Scott',
																          'alt' => 'Political Exchange',
																          'width' => '94',
																          'height' => '127'
																         );
																	$wilson = array(
																          'src' => 'images/Joe_Wilson',
																          'alt' => 'Political Exchange',
																          'width' => '94',
																          'height' => '127'
																	         );
																	$duncan = array(
																          'src' => 'images/Jeff_Duncan',
																          'alt' => 'Political Exchange',
																          'width' => '94',
																          'height' => '127'
																	         );
																	
																	$gowdy = array(
																          'src' => 'images/Trey_Gowdy',
																          'alt' => 'Political Exchange',
																          'width' => '94',
																          'height' => '127'
																		         );
																	
																	$mulvaney = array(
																          'src' => 'images/Mick_Mulvaney',
																          'alt' => 'Political Exchange',
																          'width' => '94',
																          'height' => '127'
																	         );
																	
																	$clyburn = array(
																          'src' => 'images/James_Clyburn',
																          'alt' => 'Political Exchange',
																          'width' => '94',
																          'height' => '127'
																		         );
																	?>
												              <li><?=img($obama);?><br /><a href="profile/view/Barack Obama" class="fancybox fancybox.iframe">President Barrack Obama</a></li>
															  <li><?=img($biden);?><br /><a href="profile/view/Joe Biden" class="fancybox fancybox.iframe">Vice President Joe Biden</a></li>
															  <li><?=img($graham);?><br /><a href="profile/view/Lindsey Graham" class="fancybox fancybox.iframe">Senator Lindsey Graham</a></li>
															  <li><?=img($demint);?><br /><a href="profile/view/Jim DeMint" class="fancybox fancybox.iframe">Senator Jim DeMint</a></li>
															  <li><?=img($scott);?><br /><a href="profile/view/Tim Scott" class="fancybox fancybox.iframe">Rep.Tim Scott</a></li>														
															  <li><?=img($wilson);?><br /><a href="profile/view/Joe Wilson" class="fancybox fancybox.iframe">Rep.Joe Wilson</a></li>
														  	  <li><?=img($duncan);?><br /><a href="profile/view/Jeff Duncan" class="fancybox fancybox.iframe">Rep.Jeff Duncan</a></li>
															  <li><?=img($gowdy);?><br /><a href="profile/view/Trey Gowdy" class="fancybox fancybox.iframe">Rep Trey Gowdy</a></li>
															  <li><?=img($mulvaney);?><br /><a href="profile/view/Mick Mulvaney" class="fancybox fancybox.iframe">Rep.Mick Mulvaney</a></li>
															  <li><?=img($clyburn);?><br /><a href="profile/view/James Clyburn" class="fancybox fancybox.iframe">Rep.James E. Clyburn</a></li>
															</ul>
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
