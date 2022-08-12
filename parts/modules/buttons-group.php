<?php
	$buttons = get_sub_field('button_links'); 
?>
<div class="module text-circle-image-and-text">
	<div class="grid-container">
		<?php if( !empty($buttons) ):?>
			<?php get_template_part('parts/part-button-group', null, array( 
				'data'  => array(
					'btns' => $buttons,
				)) 
			);?>
		<?php endif;?>
	</div>
</div>
