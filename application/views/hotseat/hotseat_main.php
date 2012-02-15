<?php $this->load->view('_header'); ?>



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
	

    	<div id="logoInside">
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
