<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<?php if(get_field('show_alert_bar', 'option')):
	$alert_start = get_field('alert_bar_start', 'option');
	$alert_end = get_field('alert_bar_end', 'option');
	$alert_copy = get_field('alert_bar_copy', 'option');
	$currentdate = current_time('Y-m-d H:i:s');
?>
	
<?php 
	if( empty($alert_start) || $alert_start <= $currentdate ):
	if( empty($alert_end) || $alert_end >= $currentdate ):
	// if ( alert_end >= $currentdate ):
?>
<div class="alert-bar purple-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell text-center">
				<?php echo $alert_copy;?>
			</div>
		</div>
	</div>
</div>
<?php 
	endif;
	endif;
?>

<?php endif;?>
	
<div id="nav" data-sticky-container>
	<div class="top-bar-wrap grid-container fluid" data-sticky data-top-anchor="nav" data-margin-top="0" data-sticky-on="small">
		<div class="top-bar" id="top-bar-menu">
		
			<div class="top-bar-left float-left">
				
				<ul class="menu show-for-sr">
					<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
				</ul>
				
				<ul class="menu">
					<li class="logo"><a href="<?php echo home_url(); ?>">
						<?php 
						$image = get_field('logo', 'option');
						if( !empty( $image ) ): ?>
					    	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</a></li>
				</ul>
				
			</div>
			<div class="top-bar-right show-for-tablet">
				<div class="grid-x grid-padding-x align-middle">
					<div class="cell auto">
						<?php joints_top_nav(); ?>
					</div>	
					<div class="cell shrink">
						<?php joints_orange_nav(); ?>
					</div>
				</div>
			</div>
			<div class="menu-toggle-wrap top-bar-right float-right hide-for-tablet">
				<ul class="menu">
					<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
					<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</div>
