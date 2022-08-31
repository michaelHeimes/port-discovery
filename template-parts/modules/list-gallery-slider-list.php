<?php
	$slides = get_sub_field('slides'); 
	$list = get_sub_field('list');
?>
<div class="module list-gallery-slider-list">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php
			$images = $slides;
			if( $images ): ?>
			<div class="left cell small-12 tablet-6">
				
				<div class="slider-wrap">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php foreach( $images as $image ): ?>
							<div class="swiper-slide" style="width: 100%;">
								<img src="<?php echo $image['sizes']['list-gallery-slider-list']; ?>" width="<?php echo $image['sizes']['list-gallery-slider-list-width']; ?>" height="<?php echo $image['sizes']['list-gallery-slider-list-height']; ?>" alt="<?php echo $image['caption']; ?>" />
							</div>
							<?php endforeach;?>
						</div>
						
						<div class="swiper-btn swiper-button-prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="117" height="81" viewBox="0 0 117 81">
							  	<g id="Group_1229" data-name="Group 1229" transform="translate(-145 -130)">
									<rect id="Rectangle_174" data-name="Rectangle 174" width="77" height="81" transform="translate(262 211) rotate(180)" fill="#9063cd"/>
									<g id="Group_1227" data-name="Group 1227">
								  	<g id="Group_262" data-name="Group 262" transform="translate(225.569 210.784) rotate(180)">
										<g id="Group_72" data-name="Group 72" transform="translate(0 0)">
									  	<circle id="Ellipse_29" data-name="Ellipse 29" cx="40.5" cy="40.5" r="40.5" transform="translate(-0.431 -0.216)" fill="#9063cd"/>
										</g>
								  	</g>
								  	<path id="Path_206" data-name="Path 206" d="M13.343,0,0,14.418,13.343,27.3" transform="translate(172.323 157.437)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
									</g>
							  	</g>
							</svg>
						</div>
						
						<div class="swiper-btn swiper-button-next">
							<svg xmlns="http://www.w3.org/2000/svg" width="117" height="81" viewBox="0 0 117 81">
						  	<g id="Group_1230" data-name="Group 1230" transform="translate(-615 -385)">
								<rect id="Rectangle_175" data-name="Rectangle 175" width="77" height="81" transform="translate(615 385)" fill="#9063cd"/>
								<g id="Group_1228" data-name="Group 1228">
							  	<g id="Group_263" data-name="Group 263" transform="translate(651.431 385.216)">
									<g id="Group_72" data-name="Group 72" transform="translate(0 0)">
								  	<circle id="Ellipse_29" data-name="Ellipse 29" cx="40.5" cy="40.5" r="40.5" transform="translate(-0.431 -0.216)" fill="#9063cd"/>
									</g>
							  	</g>
							  	<path id="Path_207" data-name="Path 207" d="M13.343,0,0,14.418,13.343,27.3" transform="translate(704.677 438.563) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
								</g>
						  	</g>
							</svg>
						</div>
					
					<!-- Add Pagination -->
						<div class="cell small-12 swiper-pagination"></div>
	
					</div>
					
				</div>
					
			</div>
			<?php endif;?>
			<?php if( !empty($list) ):?>
			<div class="right cell small-12 tablet-6">
				<?php echo $list;?>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>