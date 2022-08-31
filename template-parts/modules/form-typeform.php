<?php
	$heading = get_sub_field('heading');
	$text= get_sub_field('text');
	$code_snippet = get_sub_field('code_snippet');
?>
<div class="module form-typeform">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="cell small-12">
					<?php if( !empty($heading) ):?>
						<h2 class="h5"><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if( !empty($text) ):?>
						<p><?php echo $text?></p>
					<?php endif;?>		
					<?php if( !empty($code_snippet) ):?>
						<div class="typeform-wrap"><?php echo $code_snippet;?></div>
					<?php endif;?>		
				</div>	
			</div>
		</div>
	</div>
</div>