<?php $this->load->view("admin/_header.php");


?>
	<!-- Navigation -->
	
		<div class="navigation">
					<ul>
						<li><?=anchor('admin/profile', 'PROFILE');?></li>
						<li><?=anchor('admin/media', 'MEDIA');?></li>
						<li><?=anchor('admin/questions', 'QUESTIONS');?></li>
						<li><?=anchor('admin/hotseat', 'HOTSEAT');?></li>
					</ul>
					
			
				<div id="searchform">
					<form method="get" action="">
					<input value="find something good..." class="search_box" name="search" onclick="this.value='';" type="text">
					<input class="search_btn" value="SEARCH" type="submit">
					</form>
				</div>
			
		</div>
		
		<div class="clear"></div>
	
	
		<div class="content">
			<!-- Intro -->

						<div class="in author">
							<h2>Update Profile</h2>
							<p></p>
						</div>

						<div class="line"></div>
	<!-- Checks -->
	
			<div class="check_main">
					
				<div class="check" style="display:none;">
					<div class="good"><img src="stylesheets/check.gif" alt="check" class="icon">Nice work <strong>Ninja Admin!</strong></div>
				</div>
				<div class="check" style="display:none;">
					<div class="bad"><img src="stylesheets/x.gif" alt="check" class="icon">You need more training, please <a href="#">try again</a>.</div>
				</div>
				
			</div>
			
	<!-- Form -->

				<div class="in forms">
					
				<?php $this->load->view('profile/_update');?>		
			
				</div>
				
				
				
	
	

		
		</div>
		
		
		<?php $this->load->view('admin/_footer');?>		
		
	</div>


</body></html>