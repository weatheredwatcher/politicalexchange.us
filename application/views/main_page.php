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
					<h2>Federal Representatives</h2>
							<ul class="avatar">
								<?php

								$obama = array(
								          'src' => 'images/Barack_Obama',
								          'alt' => 'Political Exchange',
								          'width' => '102',
								          'height' => '125'
								         );
																	
								$biden = array(
										   'src' => 'images/Joe_Biden',
										    'alt' => 'Political Exchange',
										    'width' => '102',
										    'height' => '125'
										     );
								?>
			              <li><?=img($obama);?><br /><a href="profile/view/Barack Obama" class="fancybox fancybox.iframe">President Barrack Obama</a></li>
						  <li><?=img($biden);?><br /><a href="profile/view/Joe Biden" class="fancybox fancybox.iframe">Vice President Joe Biden</a></li>
						  <?php 
				  		foreach($fed_json as $key => $content):
				  			foreach($content as $key2 => $response):
			
				  			foreach($response as $key3 => $legislators):
				  				$image_src = "http://www.opencongress.org/images/photos/thumbs_125/".$legislators->legislator->govtrack_id.".jpeg";
				  				$youtube_channel = basename($legislators->legislator->youtube_url);
				  				$title = $legislators->legislator->title;
				  			    $full_name = $legislators->legislator->firstname.' '.$legislators->legislator->lastname; 
								
								$vari_name = $legislators->legislator->govtrack_id;
								//this data is about to be loaded into an array
								$$vari_name = array(
				  				'image_src' => "http://www.opencongress.org/images/photos/thumbs_125/".$legislators->legislator->govtrack_id.".jpeg",
				  				'youtube_channel' => basename($legislators->legislator->youtube_url),
				  				'title' => $legislators->legislator->title,
				  			    'full_name' => $legislators->legislator->firstname.' '.$legislators->legislator->lastname,
								'address' =>$legislators->legislator->congress_office,
								'city' => '' ,
								'state' => '',
								'zip' => '',
								'phone' => $legislators->legislator->phone,
								'fax' => $legislators->legislator->fax,
								'email' => $legislators->legislator->email,
								'web_url' => $legislators->legislator->website,
								'running_for' => $legislators->legislator->chamber,
								'political_party' => $legislators->legislator->party,
								'currently_in_office' => $legislators->legislator->in_office,
								'facebook' => $legislators->legislator->facebook_id,
								'twitter' => $legislators->legislator->twitter_id);
							
								$cookie = array(
								    'name'   => $vari_name,
								    'value'  => serialize($$vari_name),
								    'expire' => '86500',
								    'domain' => '.politicalexchange.us',
								    'path'   => '/'
								);
								
								set_cookie($cookie);
								?>
								
	 						   <li><?=img($image_src)?><br /> <a href="profile/view/<?=$vari_name;?>" class="fancybox fancybox.iframe"><?=$title;?>&nbsp;<?=$full_name;?></a></li>
					 
				  			<?php endforeach; ?>
				  		<?php endforeach; ?>
						  	  						   
						    <?php endforeach; ?>
						</ul>
					<div id="divide"></div>
						<h2>State Legislature</h2>
								<ul class="avatar">
				              
							              <?php foreach($state_json as $key => $value):
											  
											  $vari = $state_json[$key]->id;
											  $$vari = array(
				  				  				'image_src' => $state_json[$key]->photo_url ,
											    'title' => $legislators->legislator->title,
				  				  			    'full_name' => $state_json[$key]->full_name,
				  								'address' => $state_json[$key]->office_address,
				  								'city' => '' ,
				  								'state' => '',
				  								'zip' => '',
				  								'phone' => $state_json[$key]->office_phone,
				  								'fax' => '',
				  								'email' => '',
				  								'web_url' => $state_json[$key]->url,
				  								'running_for' => $state_json[$key]->chamber,
				  								'political_party' => $state_json[$key]->party,
				  								'currently_in_office' => $state_json[$key]->active,
				  								'facebook' => '',
				  								'twitter' => ''
												);
												
												$cookie = array(
												    'name'   => $vari,
												    'value'  => serialize($$vari),
												    'expire' => '86500',
												    'domain' => '.politicalexchange.us',
												    'path'   => '/'
												);
								
												set_cookie($cookie);
											  
											  
											  
											  ?>
												<li>
												<?php
												$state_image = array(
														   'src' => $state_json[$key]->photo_url,
														    'alt' => 'Political Exchange',
														    'width' => '102',
														    'height' => '125'
														     );
											       	
													
											       ?>
												   <?=img($state_image);?><br />


												   <?php $href="profile/view/".$vari ; ?>
												  <?=anchor($href, $state_json[$key]->full_name, array('class' => 'fancybox fancybox.iframe'));?><br />
												<?php if($state_json[$key]->chamber == "upper"):?>Representative
													<?php else:?>Senator <?php endif; ?>
												</li>
												<?php endforeach;?>
												</ul>
					    
						<div id="divide"></div>
					
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
								
								
														
														<div id="divide"></div>

													
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
