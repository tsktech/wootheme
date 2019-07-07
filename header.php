<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class('tskwoo'); ?>>

<header>
	<div class="container">
		<div class="row">
			<div class="col d-flex align-items-center justify-content-between">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-fluid logo">
				</a>
				<?php
					wp_nav_menu (
						array (
							'theme_location' => 'top-menu',
							'menu_class'	 => 'top-menu',/*'menu_class'	 => 'top-menu d-flex',*/
						)
					);
				?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</header>


