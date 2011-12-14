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
else { $msg = "<h2><span style='color:black;'>Is this you?  <a href='profile/create'>Click to setup an account</a>.</span></h2>";}

?>
          <div id="profile">
	<?=$msg;?>
           	 <div id="contentColLeft"> 
                
                <div id="topProfile">
               	
            
                  <table  border="0">
  <tr>
    <td valign="top" class="bordright"><?=img($avatar);?>
    <p> Online Last:  <strong>August 22, 2011 </strong><br />
   Next Debate:  <strong>August 29, 2011 </strong></p>
    
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
            
          
            <div class="slider">
               
         
        </div>
        </div>
                    
     
                
                </div>
                	
          			
               </div>
  		</div>
        
  </div>










<!-- End Blue  -->



</body>
</html>
