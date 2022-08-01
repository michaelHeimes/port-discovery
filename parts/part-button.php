<?php 
$btn_data = $args['data']['btn'];
$link = $btn_data['link'];

if( $link ):
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<div class="btn-wrap">
		<a class="button style-<?php echo $btn_data['button_style'];?> <?php echo $btn_data['button_color'];?>-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	</div>
<?php endif; ?>