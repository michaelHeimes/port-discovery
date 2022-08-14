<?php
	$heading = get_sub_field('heading'); 
	$quote = get_sub_field('quote'); 
	$photo = get_sub_field('photo');
	$authors_name_title = get_sub_field('authors_name_&_title'); 
	$employer = get_sub_field('employer'); 
?>
<div class="module testimonial">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					<div class="inner orange-bg">
						<div class="outlined text-center">

							<?php if( !empty($heading) ):?>
								<h2><?php echo $heading;?></h2>
							<?php endif;?>

							<?php if( !empty($quote) ):?>
								<p><i><?php echo $quote;?></i></p>
							<?php endif;?>
							
							<?php if( !empty($photo) ):?>
								<img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
							<?php endif;?>
							
							<?php if( !empty($authors_name_title) ):?>
								<h5><?php echo $authors_name_title;?></h5>
							<?php endif;?>

							<?php if( !empty($employer) ):?>
								<h5><?php echo $employer;?></h5>
							<?php endif;?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
