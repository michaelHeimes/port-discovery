<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div class="off-canvas" id="off-canvas" data-off-canvas style="display: none;">

	<div class="inner">

		<?php port_discovery_off_canvas_nav(); ?>
		
	</div>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
