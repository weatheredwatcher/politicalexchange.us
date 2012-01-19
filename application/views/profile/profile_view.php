	<?php if(isset($results)){
	
		foreach($results as $row){
		
			$full_name = $row['name'];
			$email = $row['email'];
			$campaign_name = $row['campaign_name'];
			$address1 = $row['address1'];
			$avatar = $row['avatar_id'];}
			$address2 = $row['address2'];
			$city = $row['city'];
			$state = $row['state'];
			$zip = $row['zip'];
			$phone = $row['phone'];
			$fax = $row['fax'];
			$website_url = $row['website_url'];
			$about_me = $row['about_me'];
			$party_affiliation = $row['party_affiliation'];
			$running_for = $row['running_for'];
			$currently_in_office = $row['currently_in_office'];
			$twitter = $row['twitter'];
			$facebook = $row['facebook'];
			$youtube_channel = $row['youtube_channel'];
			//add currently logged in and last log in 
		    $msg = "";
		}
	
	
	
	else { $msg = "<h2 align='center'><span style='color:black;'>Is this you?  <a href='profile/create'>Click to setup an account</a>.</span></h2>";

		$profile = unserialize($this->input->cookie($cookie));
		$full_name = $profile['full_name'];
		$youtube_channel = $profile['youtube_channel'];
		$avatar		=  $profile['image_src'];				
	    $address1   =  $profile['address'];
	    $city       =  $profile['city'];
	    $state      =  $profile['state'];
		$zip        =  $profile['zip'];
		$phone      =  $profile['phone'];
		$fax        =  $profile['fax'];
		$email      =  $profile['email'];
		$website_url = $profile['web_url'];
		$running_for  =  $profile['running_for'];
		$party_affiliation  = $profile['political_party'];
		$currently_in_office  = $profile['currently_in_office'];
		$facebook  =  $profile['facebook'];
		$twitter   =  $profile['twitter'];



	}

	?>


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
  			   	<?=$msg;?>
			              	 
            
  			                     <table  border="0">
  			     <tr>
  			       <td valign="top" class="bordright"><?php if($avatar == ""): ?><?=img('images/avatar');?>
  			   		<?php else: ?> <?=img($avatar);?> <?php endif; ?>
  			       <p> Online Last:  <strong></strong><br />
  			      Next Debate:  <strong></strong></p>
                  <a href="http://www.twitter.com/<?=$twitter;?>"><?=img("images/twitter.png");?></a>
                  <a href="http://www.facebook.com/<?=$facebook;?>"><?=img("images/facebook.png");?></a>
                  
  			       </td>
  			       <td valign="top"> <h2> <?=$full_name;?> </h2><table width="100%" border="0">
  			     <tr>
  			       <td colspan="2" bgcolor="#F4F4F4">Campaign Information:</td>
  			       </tr>
  			     <tr>
  			       <td class="gray">Campaign Name</td>
  			       <td class="black"><?=$campaign_name;?></td>
  			     </tr>
  			     <tr>
  			       <td class="gray">Address</td>
  			       <td class="black"><?=$address1;?></td>
  			     </tr>
  			     <tr>
  			       <td class="gray"></td>
  			       <td class="black"><?=$address2;?></td>
  			     </tr>
  			   <tr>
  			       <td class="gray">City</td>
  			       <td class="black"><?=$city;?></td>
  			     </tr>
  			   <tr>
  			       <td class="gray">State</td>
  			       <td class="black"><?=$state;?></td>
  			     </tr>
  			   <tr>
  			       <td class="gray">Zip</td>
  			       <td class="black"><?=$zip;?></td>
  			     </tr>
  			   <tr>
  			       <td class="gray">Phone</td>
  			       <td class="black"><?=$phone;?></td>
  			     </tr>
  			   <tr>
  			       <td class="gray">Fax</td>
  			       <td class="black"><?=$fax;?></td>
  			     </tr>
  			   <tr>
  			       <td class="gray">Email Address</td>
  			       <td class="black"><a href="mailto:<?=$email;?>"><?=$email;?></a></td>
  			     </tr>
  			   <tr>
  			       <td class="gray">Web Site</td>
  			       <td class="black"><a href="<?=$website_url;?>"><?=$website_url;?></a></td>
  			     </tr>
  			    <tr>
  			       <td class="gray">Running For:</td>
  			       <td class="black"><?=$running_for;?></td>
  			     </tr>
  			     <tr>
  			       <td class="gray">Political Views:</td>
  			       <td class="black"><?=$party_affiliation;?></td>
  			     </tr>
  			     <tr>
  			       <td class="gray">Currently in Office:</td>
  			       <td class="black"><?=$currently_in_office;?></td>
  			     </tr>

  			     <tr>
  			       <td class="gray">About Me</td>
  			       <td class="black"><textbox><?=$about_me;?></textbox></td>
  			     </tr>
  			   </table>
 
  			       </td>
  			       </tr>
  			     <tr>
  			       <td>&nbsp;</td>
  			       <td> </td>
  			       </tr>
  			   </table>
  			                   </div>
  			                   <div id="profilebar">
  			                  	  <h2> Current Videos</h2>
  			                     </div>
              
                    
                    
                    
  			                 <div align="center" >     
			            
           
           
               
  			           <?php if ($youtube_channel !=""):
  			   			 echo '<script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel='.$youtube_channel.'&synd=open&w=320&h=390&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>'; 
  			   			 else:
  			   				 echo "<h1>No Videos on File.</h1>";
				 
  			   			 endif;
  			   				 ?>
        
			           
                    
     
                
  			                   </div>
                	<div id="clear"></div>
               	 <!-- might need a clear here-->
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

