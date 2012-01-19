<DOCTYPE! html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Political Exchange</title>
<?=link_tag('stylesheets/styles.css');?>
<?=link_tag('javascript/fancybox/jquery.fancybox-1.3.4.css');?>

<script src="http://www.politicalexchange.us/javascript/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://www.politicalexchange.us/javascript/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript" charset="utf-8"></script>

<!-- TinyMCE -->

<style>


</style>
<!-- updated to jQ 1.2.6 and UI 1.5.2 2008-11-28 -->
   
<script type="text/javascript">

$(document).ready(function() {

	/* This is basic - uses default settings */
	
	$(".fancybox").fancybox();
	
	
	
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

   
             
   			 <div id="colLeft" style="width:100%;">
             	<div id="contentColLeft"> 
                
                <div id="topProfile">
               	  <h2>Profiles </h2>
				  <ul class="avatar">
                  <?php foreach($query->result() as $row):?>
					<li>  <?=img($row->avatar_id);?><br />
						<?=anchor("/profile/view/$row->id", $row->name);?></li>
				<?php endforeach;?>
				</ul>
                </div>
                
               	 <div id="divide"></div>
                
             
                	
          			
               </div>
  		</div>
        
  </div>






</div>
</div>
</div>

<!-- End Blue  -->



</body>
</html>







