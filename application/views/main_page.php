<?php $this->load->view('_header'); ?>

<!-- INFO for Drop Down Menu -->
<link rel="stylesheet" type="text/css" href="stylesheets/menu.css"/>


	
		<script type="text/javascript">
$(function(){

	//Hide SubLevel Menus
	$('#menu ul li ul').hide();

	//OnHover Show SubLevel Menus
	$('#menu ul li').hover(
		//OnHover
		function(){
			//Hide Other Menus
			$('#menu ul li').not($('ul', this)).stop();

			//Add the Arrow
			$('ul li:first-child', this).before(
				'<li class="arrow">arrow</li>'
			);

			//Remove the Border
			$('ul li.arrow', this).css('border-bottom', '0');

			// Show Hoved Menu
			$('ul', this).slideDown();
		},
		//OnOut
		function(){
			// Hide Other Menus
			$('ul', this).slideUp();

			//Remove the Arrow
			$('ul li.arrow', this).remove();
		}
	);

});
 
		</script>

<!-- END INFO for Drop Down Menu -->

</head>

<body id="sub">
<!-- Starting the Upper Half - - Blue Area -->

<div id="flagInside"></div>

<div id="wrapperInside">

<div id="contentwrapInside">
	

    	
        <?= $this->load->view('_topmenu');?>

   
		
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
											 
 								$haley = array(
 										   'src' => 'images/haley',
 										    'alt' => 'Political Exchange',
 										    'width' => '102',
 										    'height' => '125'
 										     );
											 
 								$ard = array(
 										   'src' => 'images/ard',
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
								
	 						   <li><?=img($image_src)?><br /> <a href="profile/view/<?=$vari_name;?>"><?=$title;?>&nbsp;<?=$full_name;?></a></li>
					 
				  			<?php endforeach; ?>
				  		<?php endforeach; ?>
						  	  						   
						    <?php endforeach; ?>
						</ul>
					<div id="divide"></div>
						<h2>State Representatives</h2>
								<ul class="avatar">
				              <li><?=img($haley);?><br /><a href="profile/view/Nikki Haley" class="fancybox fancybox.iframe">Gov. Nikki Haley</a></li>
							  <li><?=img($ard);?><br /><a href="profile/view/Ken Ard" class="fancybox fancybox.iframe">Lt. Gov. Ken Ard</a></li>
				              
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
												  <?=anchor($href, $state_json[$key]->full_name);?><br />
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
