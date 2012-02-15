<?php $this->load->view('_header'); ?>



</head>

<body id="sub">
	<!-- Here is the code for talking heads video -->
	<script type="text/javascript" src="http://www.politicalexchange.us/wthvideo/wthvideo3.js"></script>
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

   
             
   			 <div id="colLeft" style="width:100%;">
             	<div id="contentColLeft"> 
                
                <div id="topProfile">
               	  <h2> Are You a Candidate? </h2>
                  
				   <?php echo $error;?>
                   <p>Sign up for our services today!</p>
                   <br />
					Steps:
					<ol>
						<li>Give us information about your self and your campaign</li>
						<li>Upload a Picture of yourself for your profile</li>
						<li>Within 48 hours you will receive an email with information for confirming your campaign account</li>
						<li>Send us proof of your campaign account as instructed</li>
						<li>Allow for verification of your payment method*</li>
						<li>Enjoy unrestricted access to our site!</li>
					<p>*Service is free for all candidates residing in the State of South Carolina for first 12 months.</p>
                </div>
                
               	 <div id="divide"></div>
                <p>Go ahead, <a href="/profile/create">signup</a> today!</p>
             
                	
          			
               </div>
  		</div>
        
  </div>






</div>
</div>
</div>

<!-- End Blue  -->



</body>
</html>
