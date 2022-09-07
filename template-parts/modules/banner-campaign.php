<?php
	$background_color = get_sub_field('background_color');
	$alternative_title = get_sub_field('alternative_title');
	$copy = get_sub_field('copy');
?>
<header class="banner banner-campaign <?php echo $background_color;?>-bg" role="banner">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1 xlarge-8 xlarge-offset-2">
				<div class="grid-x align-center text-center align-middle">
					<div>
						<h1 class="page-title h3">
							<?php 
								if($alternative_title) {
									echo $alternative_title;
								} else {
									the_title();
								}
							?>
						</h1>
						<?php if( !empty($copy) ):?>
						<div class="text-wrap">
							<?php echo $copy;?>
						</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header> <!-- end article header -->