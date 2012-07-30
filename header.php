<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div style="margin-top:8px;" class="logo_box shadow_up">
			<div class="logo_box shadow_down">
				<div id="header_logo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/pathgroup_logo.png" alt="pathgroup_logo" width="129" height="41" /></a></div>
			</div>
			<?php if (is_page("home")) { ?>
				<div id="hero_image"><img src="<?php bloginfo('template_directory'); ?>/images/hero_image.jpg" alt="hero_image" width="320" height="78" /></div>
			<?php } ?>
		</div>
	</header>

	<div id="main">
	