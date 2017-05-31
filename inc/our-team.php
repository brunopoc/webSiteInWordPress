<?php
	$foliogine_lite_team_image1 = foliogine_lite('team_image1');
	$foliogine_lite_team_image2 = foliogine_lite('team_image2');
	$foliogine_lite_team_image3 = foliogine_lite('team_image3');
	$foliogine_lite_team_image4 = foliogine_lite('team_image4');

	$foliogine_lite_team_name1 = foliogine_lite('team_name1');
	$foliogine_lite_team_name2 = foliogine_lite('team_name2');
	$foliogine_lite_team_name3 = foliogine_lite('team_name3');
	$foliogine_lite_team_name4 = foliogine_lite('team_name4');

	$foliogine_lite_team_job1 = foliogine_lite('team_job1');
	$foliogine_lite_team_job2 = foliogine_lite('team_job2');
	$foliogine_lite_team_job3 = foliogine_lite('team_job3');
	$foliogine_lite_team_job4 = foliogine_lite('team_job4');
?>

    <section class="our-team">

			<div class="container">

				<h2><?php _e('NOSSO TIME','foliogine-lite'); ?></h2>



				<div class="team-wrap">

					<?php

						if ( !empty($foliogine_lite_team_image1) ):

							$foliogine_lite_img1 = $foliogine_lite_team_image1;

						else :

							$foliogine_lite_img1 = get_template_directory_uri().'/img/team-img1.jpg';

						endif;

						if ( !empty($foliogine_lite_team_image2) ):

							$foliogine_lite_img2 = $foliogine_lite_team_image2;

						else :

							$foliogine_lite_img2 = get_template_directory_uri().'/img/team-img1.jpg';

						endif;

						if ( !empty($foliogine_lite_team_image3) ):

							$foliogine_lite_img3 = $foliogine_lite_team_image3;

						else :

							$foliogine_lite_img3 = get_template_directory_uri().'/img/team-img1.jpg';

						endif;

						if ( !empty($foliogine_lite_team_image4) ):

							$foliogine_lite_img4 = $foliogine_lite_team_image4;

						else :

							$foliogine_lite_img4 = get_template_directory_uri().'/img/team-img1.jpg';

						endif;

					?>



					<a href="http://nekotecnologia.com.br/2016/07/13/bruno-cabral-ceo/" title="" style="background-image:url(<?php echo $foliogine_lite_img1; ?>)">

						<p class="background"></p>

						<p class="info">

							<?php

								if ( !empty($foliogine_lite_team_name1) ):

									echo esc_html($foliogine_lite_team_name1);

								endif;

								if ( !empty($foliogine_lite_team_job1) ):

									echo '<span>'.esc_html($foliogine_lite_team_job1).'</span>';

								endif;

							?>

						</p>

					</a>

					<a href="#" title="" style="background-image:url(<?php echo esc_url($foliogine_lite_img2); ?>)">

						<p class="background"></p>

						<p class="info">

							<?php

								if ( !empty($foliogine_lite_team_name2) ):

									echo esc_html($foliogine_lite_team_name2);

								endif;

								if ( !empty($foliogine_lite_team_job2) ):

									echo '<span>'.esc_html($foliogine_lite_team_job2).'</span>';

								endif;

							?>

						</p>

					</a>

					<a href="#" title="" style="background-image:url(<?php echo esc_url($foliogine_lite_img3); ?>)">

						<p class="background"></p>

						<p class="info">

							<?php

								if ( !empty($foliogine_lite_team_name3) ):

									echo esc_html($foliogine_lite_team_name3);

								endif;

								if ( !empty($foliogine_lite_team_job3) ):

									echo '<span>'.esc_html($foliogine_lite_team_job3).'</span>';

								endif;

							?>

						</p>

					</a>

					<a href="#" title="" style="background-image:url(<?php echo esc_url($foliogine_lite_img4); ?>)">

						<p class="background"></p>

						<p class="info">

							<?php

								if ( !empty($foliogine_lite_team_name4) ):

									echo esc_html($foliogine_lite_team_name4);

								endif;

								if ( !empty($foliogine_lite_team_job4) ):

									echo '<span>'.esc_html($foliogine_lite_team_job4).'</span>';

								endif;

							?>

						</p>

					</a>

					<div class="arrow arrow-left"></div>

					<div class="arrow arrow-right"></div>

				</div><!-- .team-wrap -->



			</div><!-- .container -->

		</section><!-- .our-team -->