<?php

$image_properties = array(
          'src' => 'images/logo-icon.png',
          'alt' => 'Political Exchange',
          'width' => '84',
          'height' => '56'
         );
?>

<a href="/home"><?=img($image_properties);?></a>
 <div id="politician">
<ul>
<li>  <?=anchor('admin', 'My Account');?></li>
<li>  <?=anchor('candidate', 'Candidates');?></li>
<li>  <?=anchor('contact', 'Contact Us');?></li>
<li>  <?=anchor('about', 'About Us');?></li>
<li>  <?=anchor('hotseat', 'HotSeat');?></li>
</ul>
</div>