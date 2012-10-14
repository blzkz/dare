<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
		<title>MV web dare</title>
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-inverse">
			  <div class="navbar-inner">
			    <a class="brand" href="#">Aski</a>
			    <ul class="nav">
			    	<li <?php if ($titulo === 'Tags') {?>class="active"<?php } ?> ><a href="<?php echo base_url(); ?>">Nube</a></li>
			    	<li <?php if ($titulo === 'Preguntas') {?>class="active"<?php } ?> ><?php echo anchor('pregunta/', 'Preguntas');?></li>
			    	<li class="pull-right"><a href="#">Populares</a></li>
			    </ul>
			  </div>
			</div>
			<div class="row">
				<div class="span9">