<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('|'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Mallanna|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <?php wp_head(); ?>	
</head>
<body>

<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="header-left">
					<div class="logo">
						<a href="<?php bloginfo('wpurl'); ?>">
							<!-- <i class="fa fa-desktop fa-2x" aria-hidden="true"></i> -->
							<img src="<?php echo get_field('logo','options');?>" alt="">
						</a>
					</div>

					<div class="button-menu">
						<a class="btn btn-menu"><i class="fa fa-lg fa-bars"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="header-right">
					<div class="nav">
						<div class="nav-inner">
							<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '' )) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="header-sticky transition">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="header-left">
					<div class="logo">
						<a href="<?php bloginfo('wpurl'); ?>">
						<!--  <?php echo wp_get_attachment_image(get_field('logo','options'),'medium'); ?> -->
						<!-- <i class="fa fa-desktop fa-2x" aria-hidden="true"></i> -->
						<img src="<?php echo get_field('logo','options');?>" alt="">
					</a>
					</div>
					<div class="button-menu">
						<a class="btn btn-menu"><i class="fa fa-lg fa-bars"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="header-right">
					<div class="nav">
						<div class="nav-inner">
							<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '' )) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
