<?php
	$heading = get_sub_field('heading'); 
	$layout = get_sub_field('layout'); 
	$logos = get_sub_field('logos'); 
	$copy = get_sub_field('copy'); 
	$button_link = get_sub_field('button_link');
?>
<div class="module supporters">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner">
					<div class="inner-2">
						<div class="grid-x grid-padding-x">
							<?php if( !empty($heading) ):?>
							<div class="cell small-12">
								<h2 class="h5 text-center"><?php echo $heading;?></h2>
							</div>
							<?php endif;?>
						</div>
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1">
								<div class="grid-x grid-padding-x">
									<div class="left cell small-12<?php if($layout == 'columns'):?> tablet-3<?php endif;?>">
										<div class="grid-x grid-padding-x align-center">
											<?php if( !empty($logos) ): foreach($logos as $logo):?>
												<div class="cell text-center small-6 medium-shrink">
													<div class="img-wrap">
														<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
													</div>
												</div>
											<?php endforeach; endif;?>
										</div>
									</div>
									<?php if( !empty( $copy) ):?>
										<div class="right cell small-12<?php if($layout == 'columns'):?> tablet-9<?php endif;?>">
											<div class="text-wrap">
												<?php echo $copy;?>
											</div>
										</div>
									<?php endif;?>
								</div>
								<?php if($button_link):?>
								<div class="text-center">
									<?php get_template_part('template-parts/part-button', null, array( 
										'data'  => array(
											'btn' => $button_link,
										)) 
									);?>
								</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
