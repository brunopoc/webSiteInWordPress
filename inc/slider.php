<?php
	$foliogine_lite_slide_image1 = foliogine_lite('slide_image1');
	$foliogine_lite_slide_image2 = foliogine_lite('slide_image2');
	$foliogine_lite_slide_image3 = foliogine_lite('slide_image3');
	$foliogine_lite_slider_bigtitle = foliogine_lite('slider_bigtitle');
	$foliogine_lite_slider_title = foliogine_lite('slider_title');
	$foliogine_lite_slider_subtitle = foliogine_lite('slider_subtitle');
?>
            <section class="slider">
				<div class="container">

					<div class="text"></div>
					<div class="screen hidden-phone">

						<div id="myCarousel" class="carousel slide screen-carousel">
							<div class="carousel-inner">
								<div class="item active">
									<?php
										if ( !empty($foliogine_lite_slide_image1) ) :
											echo '<img src="'.esc_url($foliogine_lite_slide_image1).'" alt="'.esc_attr(get_bloginfo('name')).'">';
										else:
											echo '<img src="'.get_template_directory_uri().'/img/image-on-screen-colors.jpg" alt="'.get_bloginfo('name').'">';
										endif;
									?>
								</div>
								<div class="item">
									<?php
										if ( !empty($foliogine_lite_slide_image2) ) :
											echo '<img src="'.esc_url($foliogine_lite_slide_image2).'" alt="'.get_bloginfo('name').'">';
										else:
											echo '<img src="'.get_template_directory_uri().'/img/img-on-screen-mobile-tablet.jpg" alt="'.get_bloginfo('name').'">';
										endif;
									?>
								</div>
								<div class="item">
									<?php
										if ( !empty($foliogine_lite_slide_image3) ) :
											echo '<img src="'.esc_url($foliogine_lite_slide_image3).'" alt="'.get_bloginfo('name').'">';
										else:
											echo '<img src="'.get_template_directory_uri().'/img/img-on-screen.jpg" alt="'.get_bloginfo('name').'">';
										endif;
									?>
								</div>
							</div>
						</div>

					</div>
					<?php
						//default options
						if ((!isset($foliogine_lite_slider_bigtitle) || $foliogine_lite_slider_bigtitle == '')
							&& (!isset($foliogine_lite_slider_title) || $foliogine_lite_slider_title == '')
							&& (!isset($foliogine_lite_slider_subtitle) || $foliogine_lite_slider_subtitle == '')):
					?>

							<div class="welcome-text" style ="text-shadow: 1px 1px 1px #FFF;"><?php _e('Hello and welcome, we are ThemeIsle, browse our portfolio.','foliogine-lite'); ?></div>
							<div class="ribbon hidden-phone">
								<div class="arrow arrow-left"></div>
								<div class="arrow arrow-right"></div>
								<div class="text"><?php _e('Professional WordPress theme','foliogine-lite'); ?></div>
								<div class="text-yellow hidden-tablet hidden-phone"><?php _e('Fully responsive and retina ready.','foliogine-lite'); ?></div>
							</div>
					<?php
						else:

							if ( !empty($foliogine_lite_slider_bigtitle)):
								echo '<div class="welcome-text">'.esc_html($foliogine_lite_slider_bigtitle).'</div>';
							endif;
							if ((isset($foliogine_lite_slider_title) && $foliogine_lite_slider_title != '') || (isset($foliogine_lite_slider_subtitle) && $foliogine_lite_slider_subtitle != '')):
						?>
								<div class="ribbon hidden-phone">
									<div class="arrow arrow-left"></div>
									<div class="arrow arrow-right"></div>
									<?php
										if (isset($foliogine_lite_slider_title) && $foliogine_lite_slider_title != ''):
											echo '<div class="text">'.esc_html($foliogine_lite_slider_title).'</div>';
										endif;
										if (isset($foliogine_lite_slider_subtitle) && $foliogine_lite_slider_subtitle != ''):
											echo '<div class="text-yellow hidden-tablet hidden-phone">'.esc_html($foliogine_lite_slider_subtitle).'</div>';
										endif;
									?>
								</div>
						<?php endif;
						endif;
						?>
				</div><!-- .container -->
			</section><!-- .slider -->