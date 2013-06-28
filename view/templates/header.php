<!DOCTYPE HTML>
	<head>
		<title><?= $title ?> - Prahl's Walls</title>
		<LINK href="<?= base_url('/public/css/header.css'); ?>" rel="stylesheet" type="text/css">
		<?php foreach($styles as $style): ?>
		<LINK href="<?= base_url('/public/css/'.$style); ?>" rel="stylesheet" type="text/css">
		<?php endforeach ?> 
	</head>
	<body>
		<div id="maincontain">
			<div id="header">
				<img src="<?= base_url('/public/images/header-image.jpg'); ?>" height="400" width="800"><br>
				<a href="<?= site_url('home'); ?>">Home</a> | <a href="<?= site_url('work'); ?>">Work</a> | <a href="<?= site_url('contact'); ?>">Contact</a>
				<?php
				if($this->nativesession->get('logged_in')){ ?>
				 | <a href="<?= site_url('brad'); ?>">Hub</a> | <a href="<?= site_url('logout'); ?>">Logout</a>
				 <?php } ?> 
			</div>

