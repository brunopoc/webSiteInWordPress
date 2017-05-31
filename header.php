<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package foliogine-lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link rel="stylesheet" href="style.css" />
</head>

<body <?php body_class(); ?>>

    <header>

        

        

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">

			<?php

			$foliogine_lite_logo = foliogine_lite('logo_image');
			$foliogine_lite_logo_text = foliogine_lite('logo_text');

			if (isset($foliogine_lite_logo) && $foliogine_lite_logo != '') :
				echo '<a class="brand" style="margin-top: 20px; margin-bottom: 20px;" href="'.get_site_url().'" title="'.get_bloginfo('name').'">';
                if (isset($foliogine_lite_logo_text) && $foliogine_lite_logo_text != ''):
                    echo '<img src="'.esc_url($foliogine_lite_logo).'" alt="'.esc_attr($foliogine_lite_logo_text).'">';
                else:
                    echo '<img src="'.esc_url($foliogine_lite_logo).'" alt="'.get_bloginfo('name').'">';
				endif;
				echo '</a>';
            else:
				echo ' <div class="main-title">';
					echo '<h1><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></h1>';
					echo '<h2><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" rel="home">'.get_bloginfo( 'description' ).'</a></h2>';
				echo '</div>';
			endif;
			?>


            <nav id="site-navigation" style="margin-top: 30px;" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'top_menu','container' => false, 'menu_id' => 'foliogine_lite_nav' ) ); ?>
            </nav><!-- #site-navigation -->


        </div><!-- /.container -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->

    </header>