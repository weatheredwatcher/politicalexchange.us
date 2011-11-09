<h1>Media Index</h1>

Welcome <?=$this->session->userdata('name');?>
<?php 
	$query = $this->db->get_where('resouces', array('id' => $this->session->userdata('id')));
?>
<table>
	 <?php foreach($query->result() as $row):?>
    	<?php if($row->type == 'image'):?>
			<img src="<?=$row->path_to_image;?>" alt="image" /><br />
    	<?php else: ?>
			<video src="<?=$row->path_to_image;?>" />
		<?php endif;?>
	<?php endforeach;?>
	
</table>