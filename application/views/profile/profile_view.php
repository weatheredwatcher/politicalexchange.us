<DOCTYPE! html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>
<?=link_tag('stylesheets/styles.css');?>

</head>

<body>
<!-- Starting the Upper Half - - Blue Area -->
<?php if(isset($results)){
	
	foreach($results as $row){
		
		$name = $row['name'];
		$email = $row['email'];
		$campaign_name = $row['campaign_name'];
		$address1 = $row['address1'];
		if($row['avatar_id'] == 0){$avatar = "/images/avatar.png";}else{$avatar = $row['avatar_id'];}
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
		//add currently logged in and last log in 
	    $msg = "";
	}
	
	
}
else { $msg = "<h2 align='center'><span style='color:black;'>Is this you?  <a href='profile/create'>Click to setup an account</a>.</span></h2>";

	$profile = unserialize($this->input->cookie($cookie));
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
          <div id="profile">
	<?=$msg;?>
           	 <div id="contentColLeft"> 
                
                <div id="topProfile">
               	
            
                  <table  border="0">
  <tr>
    <td valign="top" class="bordright"><?php if($avatar == ""): ?><?=img('images/avatar');?>
		<?php else: ?> <?=img($avatar);?> <?php endif; ?>
    <p> Online Last:  <strong></strong><br />
   Next Debate:  <strong></strong></p>
    
    </td>
    <td valign="top"> <h2> <?=$name;?> </h2><table width="100%" border="0">
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
    <td class="black"><?=$email;?></td>
  </tr>
<tr>
    <td class="gray">Web Site</td>
    <td class="black"><?=$website_url;?></td>
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
         <div class="sliderGallery">
           
           
               
        <?php echo '<script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel='.$youtube_channel.'&synd=open&w=320&h=390&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>'; ?>
        
        </div>
                    
     
                
                </div>
                	
          			
               </div>
  		</div>
        
  </div>










<!-- End Blue  -->



</body>
</html>
