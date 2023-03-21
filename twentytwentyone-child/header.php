<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">

 */
?><!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body>

<!--LOGO and other two parts HTML starts here----------------------------------------------->
<div>
	

</div>
	<div class="firstMain">
		<div class="logo" onclick="logo()">
			<span class="logop">
				Logo
			</span>
		</div>

		<div class="menuFlex">

			<div class="navMenu">
				<?php

				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu([
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'      => 'navMenuUp1',
						'menu_id'        => 'navMenuUp1',
						'fallback_cb'    => false,
						'depth'          => 2,
						'before' => '<span>',
						'after' => '</span>'
					]);
				}

				if (has_nav_menu('main-menu')) {
					wp_nav_menu([
						'theme_location' => 'main-menu',
						'container' => false,
						'menu_class' => 'navMenuDown1',
						'menu_id' => 'navMenuDown',
						'fallback_cb' => false,
						'depth' => 2,
						'before' => '<span>',
						'after' => '</span>'
					]);
				}

				
?>


				
			</div>

		</div>

    </div>


    <!--LOGO and other two parts HTML ends here----------------------------------------------->
