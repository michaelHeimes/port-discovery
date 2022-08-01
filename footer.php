<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */		
 ?>
					
				<footer class="footer purple-bg" role="contentinfo">
					<div class="grid-container">
						
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="left cell small-12 tablet-6 xlarge-5">
								<?php 
									$visit = get_field('visit', 'option');
									if($visit):
								?>
									<div class="visit-heading">
										<div class="grid-x grid-padding-x align-middle">
											<?php 
											$image = $visit['icon'];
											if( !empty( $image ) ): ?>
											<div class="cell small-12 tablet-shrink">
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											</div>
											<?php endif;?>
											<div class="cell small-12 tablet-auto">
												<h2><?php echo $visit['heading'];?></h2>
											</div>
										</div>
									</div>
									<div class="visit-hours">
										<div class="grid-x grid-padding-x align-middle">
											<?php if($visit['hours_heading']):?>
											<div class="cell small-12">
												<p class="heading"><?php echo $visit['hours_heading'];?></p>
											</div>
											<?php endif;?>
											<?php if($sessions = $visit['sessions']):?>
											<div class="cell small-12">
												<div class="sessions grid-x grid-padding-x">
												<?php foreach($sessions as $session):?>
													<div class="cell shrink medium-6">
														<p><?php echo $session['session_name'];?><br><?php echo $session['session_hours'];?></p>
													</div>
												<?php endforeach;?>
												</div>
												<?php 
												$link = $visit['button_link'];
												if( $link ): 
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
												<div class="btn-wrap">
													<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												</div>
												<?php endif; ?>
											</div>
											<?php endif;?>
										</div>
									</div>
									
								<?php endif;?>
								
								<div class="quick-links-wrap show-for-tablet">
									<h2 class="h5 font-body bold">Quick Links</h2>
									<nav role="navigation" class="show-for-medium">								
	    								<?php joints_footer_links(); ?>
	    							</nav>
								</div>
								
	    					</div>
							
							<div class="right cell small-12 tablet-6 xlarge-5 xlarge-offset-1">
								<div class="hide-for-medium">
									<?php 
									$info_blocks = get_field('info_blocks', 'option');
									if($info_blocks):?>
									<ul class="accordion info-blocks" data-accordion data-allow-all-closed="true">
										<?php
										foreach($info_blocks as $info_block):
										
										$icon = $info_block['icon'];
										$heading = $info_block['heading'];
										$text = $info_block['text'];
										$link = $info_block['link'];
										$add_social_links = $info_block['add_social_links'];
									?>
									
										<li class="accordion-item info-block" data-accordion-item>
											<a href="#" class="accordion-title grid-x grid-padding-x align-middle">
												<div class="cell shrink">
													<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
												</div>
												<div class="cell auto">
													<h2 class="h5 font-body"><?php echo $heading;?></h2>
												</div>
											</a>
											<div class="accordion-content" data-tab-content>
												<div class="text-wrap"><?php echo $text;?></div>
											</div>
										</li>
									
									<?php endforeach;?>
									</ul>
										<?php endif;
									?>
								</div>
								<div class="grid-x grid-padding-x show-for-medium">
								<?php 
									$info_blocks = get_field('info_blocks', 'option');
									if($info_blocks):
										foreach($info_blocks as $info_block):
										
										$icon = $info_block['icon'];
										$heading = $info_block['heading'];
										$text = $info_block['text'];
										$link = $info_block['link'];
										$add_social_links = $info_block['add_social_links'];
									?>
										
									<div class="info-block cell small-12 medium-6">
										<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
										<h2 class="h5 font-body"><?php echo $heading;?></h2>
										<div class="text-wrap"><?php echo $text;?></div>
										<?php 
											if($link):
												$link_url = $link['url'];
												$link_title = $link['title'];
												$link_target = $link['target'] ? $link['target'] : '_self';
										?>
											<div class="link-wrap">
												<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											</div>
										<?php endif; ?>
										<?php if($add_social_links):?>
											<div class="show-for-tablet">
												<?php joints_social_links();?>
											</div>
										<?php endif;?>
									</div>
										
										<?php endforeach;
									endif;
								?>
								</div>
							</div>
							
							<div class="cell small-12 quick-links-wrap show-for-medium-only">
								<h2 class="h5 font-body bold">Quick Links</h2>
								<nav role="navigation" class="show-for-medium">								
									<?php joints_footer_links(); ?>
								</nav>
							</div>
							
							<div class="cell small-12">
								<?php $privacy_policy_link = get_field('privacy_policy_link', 'option');?>
								<p class="source-org copyright small">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <?php if($privacy_policy_link):?><a href="<?php echo esc_url( $privacy_policy_link['url'] ); ?>" ><?php echo esc_html(  $privacy_policy_link['title'] ); ?></a> |
<?php endif;?> <a href="https://proprdesign.com/" target="_blank">Made by Propr</a></p>
							</div>
						
						</div> <!-- end #inner-footer -->
				
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->