<!DOCTYPE HTML>
	<head>
		<title><?= $title ?> - Prahl's Walls</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link href="<?= base_url('/public/css/header.css'); ?>" rel="stylesheet" type="text/css"> -->
		
		<!-- <link href="<?= base_url('/public/css/bootstrap-responsive.css'); ?>" rel="stylesheet"> -->
		<style type="text/css">
      		html,body {
        		height: 100%;
        		/* The html and body elements cannot have any padding or margin. */
      		}
      		/* Wrapper for page content to push down footer */
		    #wrap {
		    	min-height: 100%;
		        height: auto !important;
		        height: 100%;
		        /* Negative indent footer by it's height */
		        margin: 0 auto -60px;
		    }

            /* Set the fixed height of the footer here */
		    #push,#footer {
		    	height: 60px;
		    }
		    #footer {
		    	background-color: #f5f5f5;
		    }
		    @media (max-width: 767px) {
		    #footer {
         		margin-left: -20px;
          		margin-right: -20px;
          		padding-left: 20px;
          		padding-right: 20px;
        	}
        }
    	</style>
    	<link href="<?= base_url('/public/css/bootstrap.css'); ?>" rel="stylesheet">
	</head>
	<body>
		<div id="wrap">
			<div class="container" style="margin-bottom:50px">
				<img class="img-polaroid" src="<?= base_url('/public/img/header-image.jpg'); ?>"><br>
				<div class="navbar navbar-static-top">
					<div class="navbar-inner">
						<ul class="nav">
							<li class="divider-vertical"><a href="<?= site_url('home'); ?>"><i class="icon-home"></i>Home</a></li>
							<li class="divider-vertical"><a href="<?= site_url('work'); ?>"><i class="icon-folder-open"></i>Work</a></li>
							<li class="divider-vertical"><a href="<?= site_url('contact'); ?>"><i class="icon-pencil"></i>Contact</a></li>
							<?php
							if($this->nativesession->get('logged_in')){ ?>
						 	<li class="divider-vertical"><a href="<?= site_url('brad'); ?>"><i class="icon-user"></i>Hub</a></li>
						 	<?php } ?>
						</ul>
						<?php
						if($this->nativesession->get('logged_in')){ ?>
						<ul class="nav pull-right">
						 	<li class="divider-vertical"><a href="<?= site_url('logout'); ?>"><i class="icon-off"></i>Logout</a></li>
						</ul> 
						<?php } ?>
						
					</div>
				</div>
			</div>



