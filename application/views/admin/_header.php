<!DOCTYPE html>
<head>
<title>Political Exchange :: Admin</title>
<?= link_tag('stylesheets/admin.css'); ?>
</head>

<body>

	<div class="wrapper">
	
		<h1 class="logo">Political Exchange Admin</h1>
		<p class="txt_right">Logged in as <?=$this->session->userdata('full_name');?> <strong></strong>  <span class="v_line"> | </span> <a href="logout"> Logout</a></p>
