<?php
	$heading = get_sub_field('heading'); 
	$quote = get_sub_field('quote'); 
	$photo = get_sub_field('photo');
	$authors_name_title = get_sub_field('authors_name_&_title'); 
	$employer = get_sub_field('employer'); 
?>
<div class="module testimonial">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="orange-bg br-20">
					<div class="grid-x grid-padding-x">
						<div class="cell small-12">
							<div class="inner">
								<div class="inner-2">
									<div class="grid-x grid-padding-x">
										<div class="cell small-12">
											<div class="text-center">
					
												<?php if( !empty($heading) ):?>
													<h2 class="color-white"><?php echo $heading;?></h2>
												<?php endif;?>
					
												<?php if( !empty($quote) ):?>
													<div class="color-white"><i><?php echo $quote;?></i></div>
												<?php endif;?>
												
												<?php if( !empty($photo) ):?>
												<div class="img-wrap circle-img-wrap">
													<img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
												</div>
												<?php endif;?>
												
												<?php if( !empty($authors_name_title) ):?>
													<h5 class="color-white"><?php echo $authors_name_title;?></h5>
												<?php endif;?>
					
												<?php if( !empty($employer) ):?>
													<h5 class="color-white"><?php echo $employer;?></h5>
												<?php endif;?>
					
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
