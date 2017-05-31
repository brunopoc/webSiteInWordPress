<?php
	$foliogine_lite_skill_title = foliogine_lite('skill_title');
	$foliogine_lite_skill_text1 = foliogine_lite('skill_text1');
	$foliogine_lite_skill_text2 = foliogine_lite('skill_text2');
	$foliogine_lite_skill_text3 = foliogine_lite('skill_text3');
	$foliogine_lite_skill_text4 = foliogine_lite('skill_text4');
	$foliogine_lite_skill_val1 = foliogine_lite('skill_val1');
	$foliogine_lite_skill_val2 = foliogine_lite('skill_val2');
	$foliogine_lite_skill_val3 = foliogine_lite('skill_val3');
	$foliogine_lite_skill_val4 = foliogine_lite('skill_val4');
?>
        <section class="our-skills">
			<div class="container">

				<?php
					if ( !empty($foliogine_lite_skill_title) ):
						/*echo '<h2>'.esc_html($foliogine_lite_skill_title).'</h2>';*/
						echo '<h2>'.'NOSSAS HABILIDADES'.'<h2/>';
					else:
						echo '<h2>'.__("NOSSAS HABILIDADES","foliogine-lite").'(%)</h2>';
					endif;
				?>

				<div class="skills-wrap">
					<div class="box-skill">
						<?php if ( !empty($foliogine_lite_skill_text1) && !empty($foliogine_lite_skill_val1) ): ?>
								<p id="donutchart1" data-percent="<?php echo esc_attr($foliogine_lite_skill_val1); ?>" class="donutchart-a"></p>
								<p>
									<?php echo esc_html($foliogine_lite_skill_text1); ?>
								</p>
						<?php else: ?>
								<p id="donutchart1" data-percent="50" class="donutchart-a"></p>
						<?php endif; ?>
					</div>

					<div class="box-skill">
					<?php if ( !empty($foliogine_lite_skill_text2) && !empty($foliogine_lite_skill_val2) ): ?>
							<p id="donutchart2" data-percent="<?php echo $foliogine_lite_skill_val2; ?>" class="donutchart-a"></p>
							<p>
								<?php echo esc_html($foliogine_lite_skill_text2); ?>
							</p>
					<?php else: ?>
							<p id="donutchart2" data-percent="50" class="donutchart-a"></p>
					<?php endif; ?>
					</div>
					<div class="box-skill">
					<?php if ( !empty($foliogine_lite_skill_text3) && !empty($foliogine_lite_skill_val3) ): ?>
							<p id="donutchart3" data-percent="<?php echo esc_attr($foliogine_lite_skill_val3); ?>" class="donutchart-a"></p>
							<p>
								<?php echo esc_html($foliogine_lite_skill_text3); ?>
							</p>
					<?php else: ?>
							<p id="donutchart3" data-percent="50" class="donutchart-a"></p>
					<?php endif; ?>
					</div>
					<div class="box-skill">

					<?php if ( !empty($foliogine_lite_skill_text4) && !empty($foliogine_lite_skill_val4) ): ?>
							<p id="donutchart4" data-percent="<?php echo esc_attr($foliogine_lite_skill_val4); ?>" class="donutchart-a"></p>
							<p>
								<?php echo esc_html($foliogine_lite_skill_text4); ?>
							</p>
					<?php else: ?>
							<p id="donutchart4" data-percent="50" class="donutchart-a"></p>
					<?php endif; ?>
					</div>
				</div>

			</div><!-- .container -->
		</section><!-- .our-skills -->