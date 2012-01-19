<?php $this->load->view("admin/_header.php");?>
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
							<h2>Login:</h2>
							<p></p>
						</div>

						<div class="line"></div>
	<!-- Login Form -->
	
						<form method="post" action="<?=current_url();?>">
						Username<br />
						<input type='text' name='username' value='' /><br /><br />
						Password<br />
						<input type='password' name='password' value='' /><br /><br />
						<input type='submit' value='Login'>
						</form>
				
	
	

		
		</div>
		
		
		<?php $this->load->view('admin/_footer');?>		
		
	</div>


</body></html>