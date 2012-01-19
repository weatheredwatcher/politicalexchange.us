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
							<h2>Questions</h2>
							<p></p>
						</div>

						<div class="line"></div>
	<!-- Checks -->
	
			<div class="check_main">
					
				<div class="check">
					<div class="good">Currently there are no questions to answer.</div>
				</div>
				
				
			</div>
			
		
				
				
	
	

		
		</div>
		
		
		<?php $this->load->view('admin/_footer');?>		
		
	</div>


</body></html>