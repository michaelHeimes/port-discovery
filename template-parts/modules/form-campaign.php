<?php
	$heading = get_sub_field('heading'); 
?>
<div class="module form-campaign">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1 xlarge-8 xlarge-offset-2">
				<?php if( !empty($heading)):?>
					<h2 class="h5"><?php echo $heading;?></h2>
				<?php endif;?>
				<?php 
				$form_ID = get_sub_field('form_id');
					gravity_form( $form_ID, false, false, false, '', true );
				?>
			</div>
		</div>
	</div>
</div>
